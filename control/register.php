<?php
session_start();
include('connection.php');

// --- Registration ---
if (isset($_POST["signUp"])) {
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['Lastname'];
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Password = $_POST['password'];  // Fixed undefined variable

    // Validate password strength (recommended)
    if (strlen($Password) < 8) {
        $_SESSION['error'] = "Password must be at least 8 characters long.";
        header("Location: ../pages/index.php#signUp");
        exit();
    }

    // Hash password securely
    $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);

    // Check if email exists
    $stmt = $conn->prepare("SELECT Email FROM users WHERE Email = ?");
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['error'] = "Email already exists.";
        header("Location: ../pages/index.php#signUp");
        exit();
    } else {
        // Insert user
        $stmt = $conn->prepare("INSERT INTO users (FirstName, LastName, Username, Email, Phone, Password) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $FirstName, $LastName, $Username, $Email, $Phone, $hashedPassword);

        if ($stmt->execute()) {
            $_SESSION['register_success'] = true;
            header("Location: ../pages/index.php#signUp");
            exit();
        } else {
            $_SESSION['error'] = "Registration failed. Please try again.";
            header("Location: ../pages/index.php#signUp");
            exit();
        }
    }
}

// --- Login ---
if (isset($_POST["signIn"])) {
    $Username = $_POST['Username'];
    $Password = $_POST['password'];

    // Get user data including password hash
    $stmt = $conn->prepare("SELECT Username, Email, Password FROM users WHERE Username = ?");
    $stmt->bind_param("s", $Username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['Password'];  // Fixed case sensitivity

        // Verify the password against the hash
        if (password_verify($Password, $hashedPassword)) {
            $_SESSION['email'] = $row['Email'];
            $_SESSION['username'] = $row['Username'];
            $_SESSION['login_success'] = true; // Store username in session
            header("Location: ../pages/index.php#signIn");
            exit();
        } else {
            $_SESSION['error'] = "Invalid password.";
        }
    } else {
        $_SESSION['error'] = "Username not found.";
    }

    // If login fails, redirect back to login form
    header("Location: ../pages/index.php#signIn");
    exit();
}
?>
<?php
session_start();
include("../control/connection.php");

$loginSuccess = isset($_SESSION['login_success']) && $_SESSION['login_success'];
$registerSuccess = isset($_SESSION['register_success']) && $_SESSION['register_success'];
if ($registerSuccess) {
    unset($_SESSION['register_success']); // only show once
}

if ($loginSuccess) {
    unset($_SESSION['login_success']); // only show once
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Outfit:wght@100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>

    <?php
    if (isset($_SESSION['error'])) {
        echo "<p style='color:red; text-align:center;'>" . $_SESSION['error'] . "</p>";
        unset($_SESSION['error']);
    }
    if (isset($_SESSION['success'])) {
        echo "<p style='color:green; text-align:center;'>" . $_SESSION['success'] . "</p>";
        unset($_SESSION['success']);
    }

    ?>
    <main class="">
        <section class="">


            <div id="login-loader" class="loader-container" style="display: none;">
                <div class="loader-message">
                    <span class="loader-text">✅ Registered successful! Redirecting...</span>
                    <div class="progress-bar">
                        <div class="progress-fill"></div>
                    </div>
                </div>
            </div>

            <div class="container font" id="signUp" style="display: none;">
                <h1 class="form-title">Register</h1>
                <form method="POST" action="../control/register.php">
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" name="FirstName" placeholder="firstname" required>
                        <label for="Firstname">FirstName</label>
                    </div>
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" name="Lastname" placeholder="lastname" required>
                        <label for="LastName">LastName</label>
                    </div>
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="Username" name="Username" placeholder="Username" required>
                        <label for="Username">Username</label>
                    </div>
                    <div class="input-group">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="Email" placeholder="email" required>
                        <label for="Email">email</label>
                    </div>
                    <div class="input-group">
                        <i class="fa-solid fa-phone"></i>
                        <input type="tel" name="Phone" placeholder="phone" required>
                        <label for="phone">Phone</label>
                    </div>
                    <div class="input-group">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="password" required>
                        <label for="password">Password</label>
                    </div>
                    <input type="submit" value="sign up" class="btn" name="signUp">

                </form>
                <p class="or">
                    ------------or------------
                </p>
                <div class="icons">
                    <a href="#" class="icon"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-google"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-twitter"></i></a>
                </div>
                <div class="links">
                    <p>Already have an account</p>
                    <button id="SignInButton">Sign In</button>
                </div>
            </div>


            <div id="login-loader" class="loader-container" style="display: none;">
                <div class="loader-message">
                    <span class="loader-text">✅ Login successful! Redirecting...</span>
                    <div class="progress-bar">
                        <div class="progress-fill"></div>
                    </div>
                </div>
            </div>

            <div class="container font" id="signIn">
                <h1 class="form-title">Log In</h1>
                <form method="post" action="../control/register.php">
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" name="Username" placeholder="Username" required>
                        <label for="Username">UserName</label>
                    </div>
                    <div class="input-group">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="password" required>
                        <label for="password">Password</label>
                    </div>
                    <input type="submit" value="sign In" class="btn" name="signIn">

                </form>
                <p class="recover">
                    <a href="#">forgot Your Password ?</a>
                </p>

                <p class="or">
                    ------------or------------
                </p>
                <div class="icons">
                    <a href="#" class="icon"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-google"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-twitter"></i></a>
                </div>
                <div class="links">
                    <p>Don't have an account</p>
                    <button id="SignUpButton">Sign Up</button>
                </div>
            </div>
        </section>
    </main>
    <script src="../js/main.js"></script>
<?php if ($loginSuccess): ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const loader = document.getElementById("login-loader");
            const signIn = document.getElementById("signIn");
            const signUp = document.getElementById("signUp");

            // Hide forms
            if (signIn) signIn.style.display = "none";
            if (signUp) signUp.style.display = "none";

            // Show loader
            if (loader) loader.style.display = "flex";

            // Redirect after 8 seconds
            setTimeout(() => {
                window.location.href = "home.php";
            }, 4000);
        });
    </script>
<?php endif; ?>
<?php if ($registerSuccess): ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const loader = document.getElementById("login-loader");
            const signIn = document.getElementById("signIn");
            const signUp = document.getElementById("signUp");

            // Hide forms
            if (signIn) signIn.style.display = "none";
            if (signUp) signUp.style.display = "none";

            // Show loader
            if (loader) loader.style.display = "flex";

            // Redirect after 8 seconds
            setTimeout(() => {
                window.location.href = "home.php";
            }, 4000);
        });
    </script>
<?php endif; ?>



</body>

</html>
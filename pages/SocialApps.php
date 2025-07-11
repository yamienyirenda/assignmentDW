<?php
include('../control/connection.php'); // Adjust path as needed

$search = '';
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $stmt = $conn->prepare("SELECT * FROM socialapps WHERE app_name LIKE ?");
    $like = "%$search%";
    $stmt->bind_param("s", $like);
} else {
    $stmt = $conn->prepare("SELECT * FROM socialapps");
}

$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Popular Social Media Apps</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/favicon.png" type="image/x-icon">
   <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Outfit:wght@100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
        <script
  src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
  type="module"
></script>
</head>
<body>
  <?php include('header.php'); ?>

  <main class="font">
    <section>
      <h1>Most Popular Social Media Apps</h1>

      <form method="GET" action="" class="search-form">
        <input type="text" name="search" placeholder="Search app name..." value="<?= htmlspecialchars($search) ?>" />
        <button type="submit">Search</button>
      </form>

      <div class="app-list">
        <?php if ($result->num_rows > 0): ?>
          <?php while($row = $result->fetch_assoc()): ?>
            <div class="app-card">
              <?php if (!empty($row['logo'])): ?>
                <img src="../images/<?= htmlspecialchars($row['logo']) ?>" alt="<?= htmlspecialchars($row['app_name']) ?>" class="app-logo" />
              <?php endif; ?>
              <h2><?= htmlspecialchars($row['app_name']) ?></h2>
              <p><strong>Description:</strong> <?= htmlspecialchars($row['description']) ?></p>
              <p><strong>Safety Tips:</strong> <?= htmlspecialchars($row['safety_tip']) ?></p>
            </div>
          <?php endwhile; ?>
        <?php else: ?>
          <p>No apps found.</p>
        <?php endif; ?>
      </div>
    </section>
     <section class="cards-section">
            <div class="card-container">

                <div class="info-card">
                    <img src="images/person1.jpg" alt="Social image 1">
                    <p>Social media refers to a variety of technologies that facilitate the sharing of ideas and
                        information among their users.</p>
                </div>

                <div class="info-card">
                    <img src="images/person2.jpg" alt="Social image 2">
                    <p>Social media refers to a variety of technologies that facilitate the sharing of ideas and
                        information among their users.</p>
                </div>

                <div class="info-card">
                    <img src="images/person3.jpg" alt="Social image 3">
                    <p>Social media refers to a variety of technologies that facilitate the sharing of ideas and
                        information among their users.</p>
                </div>

            </div>
        </section>
  </main>

  <?php include('footer.php'); ?>
</body>
</html>

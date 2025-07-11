<?php
session_start();
include("../control/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Outfit:wght@100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>

</head>

<body>
    <main>
        <?php include('header.php'); ?>
        <section class="about-section font">
            <div class="about-container">

                <!-- LEFT: Text Content -->
                <div class="about-text-box">
                    <h2>What is Social Media?</h2>
                    <p>Social media refers to a variety of technologies that facilitate the sharing of ideas and
                        information among their users.</p>
                    <p>Social media platforms allow people to access information in real time, to connect with others,
                        and to find niche communities. At its best, it makes the world more interconnected.</p>
                </div>

                <!-- RIGHT: Image -->
                <div class="about-image">
                    <dotlottie-player src="https://lottie.host/15da049c-05cf-4855-8312-e8fe0f61212c/d8kiY3syct.lottie"
                        background="transparent" speed="1" style="width: 300px; height: 300px" loop
                        autoplay></dotlottie-player>
                </div>

            </div>
        </section>



        <div class="container font" id="contact">
            <h1 class="form-title">Contact Us</h1>
            <form method="POST" action="">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="FirstName" placeholder="First name" required>
                    <label for="FirstName">First Name</label>
                </div>

                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="LastName" placeholder="Last name" required>
                    <label for="LastName">Last Name</label>
                </div>

                <div class="input-group">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="Email" placeholder="Email" required>
                    <label for="Email">Email</label>
                </div>

                <div class="input-group">
                    <i class="fa-solid fa-comment"></i>
                    <textarea name="Message" placeholder="Your message..." required></textarea>
                    <label for="Message">Message</label>
                </div>

                <input type="submit" value="Send Message" class="btn" name="contactSubmit">
            </form>
        </div>

         <section class="cards-section font">
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
   <script src="../js/main.js"></script>
    <?php include('footer.php'); ?>
</body>

</html>
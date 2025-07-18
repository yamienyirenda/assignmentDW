<?php
session_start();
include("../control/connection.php");

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

$email = $_SESSION['email'];
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Campaign</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Outfit:wght@100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js" type="module"></script>
</head>

<body class="font">

    <main>

        <?php include('header.php'); ?>
        <section class="">
            <h1 class="font-h1">Welcome <?php
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo htmlspecialchars($row['Firstname']) . " " . htmlspecialchars($row['Lastname']);
            }
            ?></h1>
            <p>
                To a platform, dedicated to helping teenagers stay safe and confident while using social media. Our
                mission
                is to raise awareness about the risks of online platforms and provide practical tools, tips, and support
                to encourage safer digital behavior.
            </p>


        </section>
        <section>
            <div class="content2">
                <div class="right-column">
                    <div class="boxA">
                        <h1 class="font-h1">Why staying Safe?</h2><br><br>
                            <div class="conn">
                                <p>In today’s digital world, social media is a powerful tool for connection—but it also
                                    comes with risks. Staying safe online helps protect your privacy, prevent
                                    cyberbullying, avoid scams, and build a healthy relationship with technology. For
                                    teenagers especially, learning how to use social media responsibly is key to
                                    protecting their mental well-being and personal information.

                            </div>
                    </div>
                </div>

                <div class="left-column">
                    <div class="boxB">

                        <!-- Embed a video or placeholder -->
                        <div class="video-placeholder">
                            <iframe src="https://www.youtube.com/embed/vJmANYneTQs?si=YAoAq0GEhMStVwh5"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="wrapper">
                <div class="connn">
                    <input class="shw" type="radio" name="slide" id="c1" checked>
                    <label for="c1" class="card">
                        <div class="row">
                            <div class="icone">1</div>
                            <div class="description">
                                <h4>Re-Creation</h4>
                                <p>Social media is one of the platforms
                                    where by one can re-create the vibe inside
                                </p>
                            </div>
                        </div>
                    </label>
                    <input class="shw" type="radio" name="slide" id="c2">
                    <label for="c2" class="card">
                        <div class="row">
                            <div class="icone">2</div>
                            <div class="description">
                                <h4>Connections</h4>
                                <p>Social media also helps in connecting to one another
                                    in differrnt locations
                                </p>
                            </div>
                        </div>
                    </label>
                    <input class="shw" type="radio" name="slide" id="c3">
                    <label for="c3" class="card">
                        <div class="row">
                            <div class="icone">3</div>
                            <div class="description">
                                <h4>Researcht</h4>
                                <p>Lastly the social medial has also provide us a better enviroment where we can
                                    Research on
                                    our work</p>
                            </div>
                        </div>
                    </label>
                    <input class="shw" type="radio" name="slide" id="c4">
                    <label for="c4" class="card">
                        <div class="row">
                            <div class="icone">4</div>
                            <div class="description">
                                <h4>entertainment</h4>
                                <p>The sharing of music, locations for parties, social media has bring entertainment to
                                    the
                                    word

                                </p>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </section>
        <section class="video-section">
            <video autoplay muted loop playsinline class="background-video">
                <source src="../video/media.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <div class="video-overlay">
                <h2>Empowering Youth through Social Media</h2>
                <p>
                    Discover how social media can be used positively to build connections, learn new skills, and create
                    change.
                </p>
            </div>
        </section>

        <section class="cards-section" id="bk-color-sec">
            <div class="card-container">

                <div class="info-card">
                    <img src="../video/tip1.jpeg" alt="Social image 1">
                    <p>Social media refers to a variety of technologies that facilitate the sharing of ideas and
                        information among their users.</p>
                </div>

                <div class="info-card">
                    <img src="../video/tip2.jpeg" alt="Social image 2">
                    <p>Social media refers to a variety of technologies that facilitate the sharing of ideas and
                        information among their users.</p>
                </div>

                <div class="info-card">
                    <img src="../video/tip3.jpeg" alt="Social image 3">
                    <p>Social media refers to a variety of technologies that facilitate the sharing of ideas and
                        information among their users.</p>
                </div>

            </div>
        </section>


        <section>
            <div class="content2">
                <div class="right-column">
                    <div class="boxA">
                        <h2>Connection</h2>
                        <div class="conn">
                            <p>Social media refers to a variety of technologies that facilitate the sharing of ideas and
                                information among their users. <br><br>Social media platforms allow people to access
                                information in real time, to connect with
                                others, and to find niche communities. At its best, it makes the world more
                                interconnected.</p>

                        </div>
                    </div>
                </div>

                <div class="left-column">
                    <div class="boxB">
                        <dotlottie-wc src="https://lottie.host/09fa1108-9a72-4070-9c51-7a7c884bff43/CCBc6Lxu5J.lottie"
                            style="width: 300px;height: 300px" speed="1" autoplay loop></dotlottie-wc>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <script src="../js/main.js"></script>
    <?php include('footer.php'); ?>
</body>

</html>
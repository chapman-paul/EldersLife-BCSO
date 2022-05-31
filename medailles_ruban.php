<?php
session_start();
if(!$_SESSION['mdp']){
    header('Location: connexion.php ');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="https://fonts.googleapis.com/css2?family=Arapey&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="medailles_rubans.css">
    <link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css" />
    <script src="https://kit.fontawesome.com/c6c4aaaf12.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <title>Medailles et Rubans </title>
</head>

<body>
<header>
        <?php include('header.php'); ?>
        </header>
    <section>
        <h2> Médailles et Rubans</h2>
        <div class="container">
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="diapo/medailles_1.png"></div>
                    <div class="swiper-slide"><img src="diapo/medailles_2.png"></div>
                    <div class="swiper-slide"><img src="diapo/medailles_3.png"></div>
                    ...
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
        </div>
    </section>


    <footer>
        <?php include('footer.php'); ?>
        </footer>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,

            pagination: {
                el: '.swiper-pagination',
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>

</html>
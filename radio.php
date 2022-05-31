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
    <link rel="stylesheet" href="radio.css">
    <script src="https://kit.fontawesome.com/c6c4aaaf12.js" crossorigin="anonymous"></script>
    <title>Fréquences Radio</title>

</html>

<body>
<header>
        <?php include('header.php'); ?>
        </header>
    <section>
        <h1>Radio</h1>
        <img src="base_de_données/radio.png"></img>
    </section>

    <footer>
        <?php include('footer.php'); ?>
        </footer>

</body>
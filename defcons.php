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
    <link rel="stylesheet" href="defcons.css">
    <link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css" />
    <script src="https://kit.fontawesome.com/c6c4aaaf12.js" crossorigin="anonymous"></script>
    <title>Defcons Actuel</title>
</head>

<body>
<header>
        <?php include('header.php'); ?>
        </header>
    <section>

        <h1>Defcons Actuel</h1>
        <img src="base_de_données/defcons.png">
        <h3>
            Bonjour San Andreas
            <br>
            <br>
            <br>
            🟡Remise en place du DEFCON-4 dans le Blaine County
            <br>
            <br>
            -Contrôles plus fréquents
            <br>
            -Gilet pare-balles pour tous les officiers
            <br>
            -Assaut SRT disponible que lors d'interventions critiques

    </section>


    <footer>
        <?php include('footer.php'); ?>
        </footer>

</body>

</html>
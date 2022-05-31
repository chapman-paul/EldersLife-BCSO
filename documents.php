<?php
session_start();
if(!$_SESSION['mdp']){
    header('Location: index.php ');
}
?>
<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8" />
        <link href="https://fonts.googleapis.com/css2?family=Arapey&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="accueil.css">
        <script src="https://kit.fontawesome.com/c6c4aaaf12.js" crossorigin="anonymous"></script>
        <title>Documents</title>
</head>

<body>
<header>
<?php include('header.php'); ?>     
</header>


        <h3>BLAINE COUNTY SHERIFF'S OFFICE</h3>
        <h2> To Protect and To Serve</h2>
        <div id="diapo">
                <div class="images">
                        <img src="diapo/BCSO_1.png" >
                        <img src="diapo/BCSO_2.png" >
                        <img src="diapo/BCSO_3.png" >
                        <img src="diapo/BCSO_4.png" >
                        <img src="diapo/BCSO_5.png" >
                        <img src="diapo/BCSO_6.png" >
                        <img src="diapo/BCSO_7.png" >
                        <img src="diapo/BCSO_8.png" >
                        <img src="diapo/BCSO_9.png" >
                        <img src="diapo/BCSO_10.png">                        
                </div>
       
<?php include('footer.php'); ?>


</body>

</html>
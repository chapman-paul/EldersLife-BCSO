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
    <link rel="stylesheet" href="etat_major.css">
    <script src="https://kit.fontawesome.com/c6c4aaaf12.js" crossorigin="anonymous"></script>
    <title>Assistant Sheriff</title>

</html>

<body>
<header>
        <?php include('header.php'); ?>
        </header>

    <section>

    </section>

    <h1>Etat Major :</h1>
    <br>
    <br>
    <br>
    <br>

    <h3>Assistant Sheriff :</h3>
    <aside>
        <h2>FOLLEY Arthur</h2>
        <img src="base_de_données/folley.jpg" alt="folley">
        <p>
            <u>Nom :</u> Folley
            <br>
            <br>
            <u>Prénom :</u> Arthur
            <br>
            <br>
            <u>Matricule :</u>187
            <br>
            <br>
            <u>Grade :</u>Assistant Sheriff
            <br>
            <br>
            <u>Date de naissance :</u> 30/01/1976
            <br>
            <br>
            <u>Lieu de naissance :</u> Los Santos
            <br>
            <br>
            <u>Nationalité :</u> Américaine
            <br>
            <br>
            <u>Poids :</u>
            <br>
            <br>
            <u>Taille :</u> 1.80 m
            <br>
            <br>
            <u>Diplômes :</u>
            <br>
            <br>
            <u>Situation :</u> Celibataire
            <br>
            <br>
        </p>
    </aside>
    <article>
        <p>
            Né le 30 janvier 1976 à Los Santos, Arthur Folley est un pur produit de San Andreas. Grandissant sur Groove Street, 
            les parents aimants et bienveillants de Arthur ont toujours su le tenir loin de la rue. Alors qu’il voyait ses camarades de classe sortir tard le soir et se faire ramener par la police, 
            il passait ses week end dans le nord de l’Etat avec son père qui l'initie à la chasse et l’amour de la Nature
            <br>
            <br>
            En bon patriote, son père s’engage dans l’armée et participe à l’invasion du Panama et meurt au combat en 1989. Arthur,
             alors âgé de 13 ans, sèche vite ses larmes car il sait que son père est mort pour son pays, la démocratie et la liberté. 
            <br>
            <br>
            En effet, le patriotisme, la démocratie et la liberté sont des valeurs extrêmement importantes dans le cœur de Folley.
            <br>
            <br>
            Alors qu’il rencontre la femme de sa vie à 19ans, il ne rentre pas au LSPD comme il le voulait mais va partir à Los Angeles,
             là où celle qui sera son épouse un ans plus tard et pour 26 ans rêvait de vivre.
            <br>
            <br>
            l incorpore donc le LAPD dans lequel il aura une carrière sans embûche, préférant toujours la parole aux armes. Alors arrivé au grade de lieutenant, il rêve de faire vivre son fort
             patriotisme et son amour de la démocratie  en s’engageant en tant que brancardier dans le 3e régiment  des Marines lors de la seconde guerre du golfe en 2003.
            <br>
            <br>
            Il reviendra de la guerre changé à jamais, détestant encore plus les armes qu’avant.
            <br>
            <br>
            Reprenant son poste au sein du LAPD, il devient commandant en 2021, sa plus grande fierté
            <br>
            <br>
            Lors d’un divorce difficile, il décide de tout quitter, sa femme ne lui ayant laissé qu’une voiture et un chat pour repartir. Il retourne donc à San Andreas pour non pas rejoindre le 
            LSPD mais le Nord et ses paysages sublime. Il entre alors au BCSO et se met vite au service du Sheriff Blake avec qui il partage de nombreuses valeurs.
            <br>
            <br>
            Il occupe maintenant le poste de Assistant Sheriff, poste qu’il occupe avec une fidélité sans faille pour le Sheriff et
            l’Under Sheriff et un amour inconditionnel pour ses agents et toute la communauté de San Andreas.
            <br>
            <br>   
            Le 25/05/2022 il perdra un Shifumi contre l'agent Paul Chapman matricule 126, il a donc dû se faire la boule à zéro     
        </p>
    </article>

    <footer>
        <?php include('footer.php'); ?>
        </footer>
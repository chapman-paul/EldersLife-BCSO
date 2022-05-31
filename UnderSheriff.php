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
    <title>UnderSheriff</title>

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

    <h3>UnderSheriff :</h3>
    <aside>
        <h2>NELSON Scott</h2>
        <img src="base_de_données/nelson_scott.png" alt="nelson_scott">
        <p>
            <u>Nom :</u> Nelson
            <br>
            <br>
            <u>Prénom :</u> Scott
            <br>
            <br>
            <u>Matricule :</u>130
            <br>
            <br>
            <u>Grade :</u>UnderSheriff
            <br>
            <br>
            <u>Date de naissance :</u> 30/05/1995
            <br>
            <br>
            <u>Lieu de naissance :</u> Los Angeles
            <br>
            <br>
            <u>Nationalité :</u> Américaine
            <br>
            <br>
            <u>Poids :</u> 75kg
            <br>
            <br>
            <u>Taille :</u> 1,78 m
            <br>
            <br>
            <u>Diplômes :</u> High School Diploma, Bachelor of Law, United States Army Sniper Diploma
            <br>
            <br>
            <u>Situation :</u> Marié depuis le 20/05/2022
            <br>
            <br>
        </p>
    </aside>
    <article>
        <p>
            Scott est née un beau jour de mai, le 30, dès sa naissance, sa vie ne serra pas facile, prématuré et né au
            bout de 6 mois de grossesse, il commencera sa vie en se battant. Issus d'une famille modeste, Scott, dès son
            plus jeune âge éprouvait une grande admiration pour les Policiers, Pompiers, Militaire à qui il allai devoir
            la vie, sans le savoir...
            <br>
            <br>
            A l'âge de ses 16 ans, un soir brumeux de novembre, le frère de Scott se rendaient chez ses grand parents,
            malheureusement pour lui, tout ne se passerai pas comme prévu... Au tournant d'un virage sombre, un
            véhicule, sans phare, s'arrêta à coté du véhicule du Frère de Scott, il ouvrit la fenêtre à fit feu à 5
            reprise, 4 balles le touchèrent, il n'avait pourtant pas l'air dans un état grave ...
            <br>
            <br>
            Après avoir passé les 8 minutes les plus longues de sa vie, celui ci aperçu une lueur bleu au loin, les
            secours étaient sur le point de faire face à une situation plus difficile que ce qu'elle ne paraissait.
            Le frère de Scott, après examens par l'équipage de l'EMT présente sur place, souffre d'une hémorragie grave
            et d'une perforation du poumon gauche, qui, durant le transport, le ferra succomber...
            <br>
            <br>
            Cette macabre aventure est la 1ère confrontation de Scott à la mort.
            <br>
            <br>
            Après cet assassinat, Scott se jura de se rendre utile, de pouvoir aider, sauver comme il aurait aimé qu'on
            sauve son frère.
            <br>
            <br>
            Quelques années plus tard il était prêt, il était décidé à faire carrière dans l'US Army, c'est pour quoi,
            le jour de ses 21 ans, Scott pris la route pour son centre de formation, c'est la qu'il allait découvrir la
            face cachée du métier qu'il avait tant convoité.
            <br>
            <br>
            Durant cette formation, il eu la chance d'être repéré par le Sergeant Instructor Jones grâce à sa capacité
            de tir et grâce à la précision dont il faisait preuve sur chacunes de ses cibles.
            <br>
            <br>
            Après cette période de formation, Scott pris la décision d'écouter les conseils de son instructeur et de
            postuler à l'United States Army Sniper School, il réussira son cursus, et continuera sa carrière au sein de
            l'US Army en tant que snipers.
            <br>
            <br>
            Sa place de sniper ne lui permettait pas de faire paraitre, quelqu'en sois la forme, du stresse ou de
            l'inquiétude, il devait rester de marbre et accomplir sa mission, protéger ses camarades et servir son pays.
            Il sera fière d'entretenir ses valeurs pendant encore 4 années, jusqu'à la fin des ses différentes mission.
            Décidant que ces années de service au sein de l'US Army lui suffiraient, Scott pris la décision de se
            tourner vers la Police, il commencera donc une nouvelle carrière au sein du Columbia Police Department en
            tant que Tireur de Précision dans l'unité d'intervention local. Il prendra la décision par la suite
            d'intégrer le Bureau d'Investigation du Département de Police de Columbia.
            <br>
            <br>
            Il s'engagea ensuite au B.C.S.O., ils fut passionné par la différence entre les métiers qu'il avait exercé,
            il continuera à gravir les échelons jusqu'au grade d'UnderSheriff.
            <br>
            <br>
            Il fit, dans le cadre de son travail la rencontre inattendu d'une femme prénommée Rea, ils entamèrent tous
            deux une relation amoureuse.
            <br>
            <br>
            Après 1 an et 1 mois, la décision de Scott été prise, il ferait de Rea la femme de sa vie. Il entrepris donc
            une demande en Mariage, à laquelle Rea répondit "Oui".
            <br>
            <br>
            Scott épanouie dans son métier et dans sa vie personnel, continuera à exercer le métiers qui le passionne
            tant et à prendre soin de sa femme avec laquelle il se mariera quelque mois plus tard.
            <br>
            <br>
        </p>
    </article>

    <footer>
        <?php include('footer.php'); ?>
        </footer>
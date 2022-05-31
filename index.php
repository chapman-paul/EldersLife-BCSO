<?php 
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8;', 'root', 'root');
if(isset($_POST['envoi'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']);

        $recupUser = $bdd->prepare('SELECT * FROM users WHERE pseudo =? AND mdp=?');
        $recupUser->execute(array($pseudo, $mdp));

        if($recupUser->rowCount() > 0){
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
            header('Location: documents.php');
        }else {           
        }
    }else{        
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="connexion.css">    
</head>

<body>
    <form  method="POST" action="" align="center">
        <h1>Se connecter :</h1>        
        <div class="inputs">
            <input class="identifiants1" type="text" name="pseudo" autocomplete="off" placeholder="NOM Prénom">
            <input class="identifiants2" type="password" name="mdp" autocomplete="off" placeholder="Mot de Passe">
        </div>

        <a class="inscrire" href="inscription.php"><p>Clique <span>ici</span> pour t'incrire:</a> 
        <div align="center">
            <button class="btn" type="submit" name="envoi">Se connecter</button>
        </div>
    </form>
</body>

</html>

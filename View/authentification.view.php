<?php session_start() ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form class="box" action="..\Controller\authentification.ctrl.php" method="post">
        <h1 class="box-title">Connexion</h1>
        <input type="text" class="box-input" name="nom_utilisateur" placeholder="Nom d'utilisateur">
        <input type="password" class="box-input" name="mot_de_passe" placeholder="Mot de passe">
        <input type="submit" value="Connexion " name="submit" class="box-button">
        <p class="box-register">Vous êtes nouveau ici? <a href="inscription.view.php">S'inscrire</a></p>
    </form>
</body>

</html>
<?php


if(isset($_POST)){
    include ('../Model/Compte/Utilisateur.class.php');
    include ('../Model/DBManager.class.php');

    $Utilisateur = new Utilisateur(
        $_POST['nom_utilisateur'],
        hash('md5', $_POST['mot_de_passe']),
        $_POST['nationalite'],
        $_POST['num_passeport'],
        $_POST['nom_prenom'],
        $_POST['adresse'],
        $_POST['telephone'],
    );
    
    //Insert User in Date Base
    $DBManager = new DBManager();
    $DBManager->insertEmploye($Utilisateur);
}
?>
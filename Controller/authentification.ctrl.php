<?php
session_start();

include "../Model/DBManager.class.php";

if(isset($_POST))
{
    if($_POST['nom_utilisateur'] === "admin" && $_POST['mot_de_passe'] === "admin"){
        
        header('Location: ../View/AdminView/admin.view.php');
    }else{
        $login = $_POST['nom_utilisateur'];
        $password = $_POST['mot_de_passe'];
        $db = new DBManager();
        $db->connexionUser($login,$password);
        $_SESSION['nom_utilisateur'] = $login;
        $utilisateur = $db->selectByNom($login);
        $_SESSION['utilisateur'] = $utilisateur;
        
        header('Location: ../View/ClientView/client.view.php');
    }
    
}
?>

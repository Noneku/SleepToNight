<?php

include "../Model/DBManager.class.php";

if(isset($_POST))
{
    session_start();

    if($_POST['nom_utilisateur'] === "admin" && $_POST['mot_de_passe'] === "admin"){
        
        header('Location: ../View/AdminView/admin.view.php');
    }else{
        //Return Form values
        $login = $_POST['nom_utilisateur'];
        $password = $_POST['mot_de_passe'];
        //Connect to DB
        $db = new DBManager();
        $db->connexionUser($login,$password);

        //Get the client in DB by $login
        $client = $db->selectByNom($login);
        $_SESSION['client'] = $client;
        
        header('Location: ../View/ClientView/client.view.php');
    }
    
}
?>

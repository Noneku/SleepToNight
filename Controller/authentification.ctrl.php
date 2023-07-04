<?php

session_start();
include "..\Model\DBManager.class.php";


if(isset($_POST))
{
    $login = $_POST['nom_utilisateur'];
    $password = $_POST['mot_de_passe'];
    $db = new DBManager();
    $db->connexionUser($login,$password);
    
}

?>
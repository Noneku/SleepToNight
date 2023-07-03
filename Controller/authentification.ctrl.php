<?php
session_start();
include "..\Model\DBManager.class.php";


if(isset($_POST['submit']))
{
    $login=$_POST['nom_utilisateur'];
    $password=$_POST['password'];
    $db = new DBManager();
    $sql="SELECT * FROM utilisateur where nom_utilisateur='$login'and mot_de_passe='$password'";
    $result= $db->getBdd()->prepare($sql);
    $result->execute();
    if($result->rowCount()>0)

    {
        $data = $result->fetchAll();
            $_SESSION['nom_utilisateur'] = $login;
            echo "Connexion effectuée";

    }else{
        echo "vous n'êtes pas inscrit";
    }
}




?>
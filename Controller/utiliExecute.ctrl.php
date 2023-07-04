<?php 
include "../Model/DBManager.class.php";




$db = new DBManager();

$db -> selectListeUtilisateur();


$_SESSION['$db'] = $db;



?>
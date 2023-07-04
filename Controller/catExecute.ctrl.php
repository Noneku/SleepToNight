<?php 
include "../Model/DBManager.class.php";




$db = new DBManager();

$db -> selectListeCategorie();


$_SESSION['$db'] = $db;



?>
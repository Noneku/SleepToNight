<?php 
include "../Model/DBManager.class.php";




$db = new DBManager();

$db -> selectListeChambre();


$_SESSION['$db'] = $db;



?>
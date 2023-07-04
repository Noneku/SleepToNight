<?php 
include "../Model/DBManager.class.php";




$db = new DBManager();

$db -> selectListeClient();


$_SESSION['$db'] = $db;



?>
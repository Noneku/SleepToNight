<?php
include "../Model/DBManager.class.php";




$db = new DBManager();

$db -> selectListeReservation();


$_SESSION['$db'] = $db;






?>


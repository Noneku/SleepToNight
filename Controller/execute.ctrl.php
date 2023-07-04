<?php
include "../Model/DBManager.class.php";
session_start();



$db = new DBManager();


// $db -> selectListeChambre();
// $db -> selectListeClient();
// $db -> selectListeReservation();
// $db -> selectListeUtilisateur();

// print_r($db -> selectListeCategorie());
// print_r($db -> selectListeChambre());
// print_r($db -> selectListeClient());
// print_r($db -> selectListeReservation());
// print_r($db -> selectListeUtilisateur());

$_SESSION['$db'] = $db;
header("Location: ../V/admin.View.php");
?>
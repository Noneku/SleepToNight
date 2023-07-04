<?php
include "..\Model\DBManager.class.php";

$db = new DBManager();



$nationalite = 'Portugais';
$num_passe = 'AZ260'; 
$prenom_client='Manuel';
$adress_client='Ruas Miguel Bombarda, 5 - 4° Esq
6290 Gouveia';
$tele_client='0215391383';

$db->insertClient($nationalite,$num_passe,$prenom_client,$adress_client,$tele_client);

//print_r($db->selectListeEmploye());
?>
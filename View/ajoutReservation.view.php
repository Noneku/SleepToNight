<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="box" action="..\Controller\ajoutReservation.ctrl.php" method="post" >
<h1 class="box-title">Reservation</h1>
<label for="date_reservation">Date de Réservation Date arrivée date de Départ</label><br>
<input type="date" class="box-input" name="date_reservation" value="<?php echo date('Y-m-d');?>" >
<label for="date_entrer">Date arrivée</label><br>
<input type="date" class="box-input" name="date_entrer" placeholder="Date d'arrivée">
<input type="date" class="box-input" name="date_sortie" placeholder="Date de depart">
<select name="id_chambre" id=""></select>
<input type="submit" value="Reserver " name="submit" class="box-button">
</form>
</body>
</html>
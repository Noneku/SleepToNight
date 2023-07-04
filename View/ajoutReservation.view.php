<?php session_start()?>


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

    <p>
        <label for="date_reservation">Date de réservation</label><br>
        <input type="date" class="box-input" name="date_reservation" value="<?php echo date('Y-m-d');?>" readonly><br><br>
    </p>

    <p>
        <label for="date_entrer">Date arrivée</label><br>
        <input type="date" class="box-input" name="date_entrer" placeholder="Date d'arrivée"><br><br>
    </p>

    <p>
        <label for="date_reservation">Date de départ</label><br>
        <input type="date" class="box-input" name="date_sortie" placeholder="Date de depart"><br><br>
    </p>

    <p>
        <label for="id_chambre">Selectionner votre chambre: </label><br>
        <select id="id_chambre" name="id_chambre">
            <option value="selection">Selection</option>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="fiat">Fiat</option>
            <option value="audi">Audi</option>
        </select><br>
    </p>

<input type="submit" value="Reserver " name="submit" class="box-button">
</form>
</body>
</html>
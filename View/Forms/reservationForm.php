

<form class="box" action="..\Controller\reservation.ctrl.php" method="post">
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
        <label for="date_sortie">Date de départ</label><br>
        <input type="date" class="box-input" name="date_sortie" placeholder="Date de depart"><br><br>
    </p>
<input type="submit" value="Reserver " name="id_chambre"  class="box-button">
</form>
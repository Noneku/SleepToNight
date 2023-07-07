<<<<<<< HEAD
<form method="post" action='../Controller/ajoutReservation.ctrl.php' class="w-75">

    <div class="row d-flex justify-content-center" style="height: 500px;">
        <div class="col-md-6 mb-4">
            <div class="form-outline">
                <input type="date" id="date_reservation" name="date_reservation" class="form-control form-control-lg" />
                <label class="form-label mt-2" for="date_reservation">date reservation</label>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="form-outline">
                <input type="date" id="date_entrer" name="date_entrer" class="form-control form-control-lg" />
                <label class="form-label mt-2" for="date_entrer">date Arrivée</label>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="form-outline">
                <input type="date" id="date_sortie" name="date_sortie" class="form-control form-control-lg" />
                <label class="form-label mt-2" for="date_sortie">Date de Départ</label>
            </div>
        </div>
       <div class="mt-4 pt-2">
        <input class="btn btn-primary btn-lg mt-2" type="submit" value="Submit" />
    </div>
=======
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
        <label for="date_reservation">Date de départ</label><br>
        <input type="date" class="box-input" name="date_sortie" placeholder="Date de depart"><br><br>
    </p>
<input type="submit" value="Reserver " name="submit" class="box-button">
>>>>>>> dev
</form>
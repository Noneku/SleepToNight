<?php
session_start();
$_SESSION['nom_utilisateur'];
?>


<form method="post" action='../../Controller/ajoutReservation.ctrl.php' class="w-50">

    <div class="row">
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
        <div class="col-md-6 mb-4">
            <!-- <div class="form-outline">
                <input type="text" id="id_chambre" name="id_chambre" class="form-control form-control-lg" />
                <label class="form-label mt-2" for="id_chambre">Chambre</label>
            </div> -->
        </div>
        <!-- <div class="col-md-6 mb-4">
            <div class="form-outline">
                <input type="text" id="id_client" name="id_client" class="form-control form-control-lg" />
                <label class="form-label mt-2" for="id_client">Client</label>
            </div>
        </div>
    </div> -->
       <div class="mt-4 pt-2">
        <input class="btn btn-primary btn-lg mt-2" type="submit" value="Submit" />
    </div>
</form>
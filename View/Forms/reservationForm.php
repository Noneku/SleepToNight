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
            <div class="form-outline">
                <label class="form-label mt-2" for="id_chambre">Chambre</label>
                <select name="id_chambre" id="id_chambre">
                    <option value="">Selectionner une chambre</option>
                    <option value="1">chambre 1</option>
                    <option value="2">chambre 2</option>
                    <option value="3">chambre </option>
                    <option value="4">chambre 4</option>
                    <option value="5">chambre 5</option>
                    <option value="6">chambre 6</option>
                    <option value="7">chambre 7</option>
                    <option value="8">chambre 8</option>
                    <option value="9">chambre 9</option>

                </select>
                
            </div>
        </div>
       
       <div class="mt-4 pt-2">
        <input class="btn btn-primary btn-lg mt-2" type="submit" value="Submit" />
    </div>
</form>
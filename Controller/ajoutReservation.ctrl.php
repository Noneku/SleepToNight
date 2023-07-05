<?php
    session_start();
    $_SESSION ['nom_utilisateur'];
    include "Model/Reservation.class.php";
    include "../Model/Compte/DBManager.class.php";

    if(isset($_POST)){
        $db = new DBManager();
        $id_client->recuperationIdclient($_POST['nom_utilisateur']);
        $id_chambre;
        $Reservation = new Reservation(
            $_POST['date_reservation'],
            $_POST['date_entre'],
            $_POST['date_sortie'],
            $id_client,
            $_POST['id_chambre'],
        );
        $db->creerUneReservation($Reservation);
    
    
    }
?>
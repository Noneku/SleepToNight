<?php
    session_start();
    // $_SESSION ['nom_utilisateur'];
    include '../Model/Compte/Reservation.class.php';
    include '../Model/DBManager.class.php';

    if(isset($_POST)){
        $db = new DBManager();
        $id_client=$db->recuperationIdclient($_POST['nom_utilisateur']);
        $Reservation = new Reservation(
            $_POST['date_reservation'],
            $_POST['date_entrer'],
            $_POST['date_sortie'],
            $id_client,
        );
        
        $db->creerUneReservation($Reservation);

           print_r($Reservation);
    
    
    }
    // var_dump($_POST);
?>
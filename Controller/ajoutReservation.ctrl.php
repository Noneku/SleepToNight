<?php
    session_start();
    $_SESSION['nom_utilisateur'];
    include '../Model/Compte/Reservation.class.php';
    include '../Model/DBManager.class.php';

    if(isset($_POST)){
        $db = new DBManager();
        $nom=$_SESSION['nom_utilisateur'];
        var_dump($nom);
        $id_client = $db->selectByNom($nom);
        $Reservation = new Reservation(
            $_POST['date_reservation'],
            $_POST['date_entrer'],
            $_POST['date_sortie'],
            $id_client,
        );
        
        $db->creerUneReservation($Reservation);

        //    print_r($Reservation);
    
    
    }
    // var_dump($_POST);
?>
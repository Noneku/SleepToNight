<?php
    session_start();
    $_SESSION['nom_utilisateur'];
    include '../Model/Compte/Reservation.class.php';
    include '../Model/DBManager.class.php';

    if(isset($_POST)){
        $db = new DBManager();
        $id_utilisateur=$_SESSION['utilisateur'][0]['id_client'];
        var_dump($nom);
        $id_chambre=$_POST['id_chambre'];
        $chambre = $db->selectById('chambre', 'id_chambre',$id_chambre);
        $Reservation = new Reservation(
            $_POST['date_reservation'],
            $_POST['date_entrer'],
            $_POST['date_sortie'],
            $chambre,
            $id_utilisateur
        );
        
        $db->creerUneReservation($Reservation);

        //    print_r($Reservation);
    
    
    }
    // var_dump($_POST);
?>
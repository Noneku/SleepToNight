<?php
    session_start();

    include '../Model/Compte/Reservation.class.php';
    include '../Model/DBManager.class.php';


    if(isset($_POST)){
        $db = new DBManager();
        // var_dump($_SESSION['client']);
         $id_chambre = $_SESSION['client'][4]['id_chambre'];
         echo("id de la chambre" . $id_chambre);
         $id_client = $_SESSION['client'][0]['id_client'];


        // $chambre = $db->selectById('chambre', 'id_chambre',$id_chambre);
        $Reservation = new Reservation(
            $_POST['date_reservation'],
            $_POST['date_entrer'],
            $_POST['date_sortie'],
            $id_chambre,
            $id_client
        );
        
            $db->creerUneReservation($Reservation);
           print_r($Reservation);
           header('Location: ../View/ClientView/client.view.php');
    
    
    }
    // var_dump($_POST);
?>
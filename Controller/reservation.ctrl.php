<?php
session_start();
header('Location:../View/reservation.view.php');

if(isset($_POST)){
    // var_dump($_SESSION['client']);
    // var_dump($_POST['id_chambre']);
    // var_dump($_SESSION['id_chambre']);
    include ('../Model/Compte/Reservation.class.php');
    include ('../Model/DBManager.class.php');
    $Reservation=new Reservation(
        $_POST['date_reservation'],
        $_POST['date_enter'],
        $_POST['date_sortie'],
        $_SESSION['id_client'],
        intval($_POST['id_chambre'])
    );
   
    $db=new DBManager();
    $db->creerUneReservation($Reservation);
    
}

?>
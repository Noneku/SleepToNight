<?php
    session_start();
    $_SESSION ['nom_utilisateur'];
    include "Model/Reservation.class.php";
    include "../Model/Compte/DBManager.class.php";

    if(isset($_POST)){
        $sql = new DBManager();
        $Reservation = new Reservation(
            $_POST['date_reservation'],
            $_POST['date_entre'],
            $_POST['date_sortie'],
            $_POST['id_client'],
            $_POST['id_chambre'],
        );
    
    }
?>
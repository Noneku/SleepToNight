<?php
    include ('Client.Absclass.php');
    include ('Client.Absclass.php');

    class Reservation extends Client
    {
        private int $num_reservation;
        private date $date_reservation;
        private int $num_chamb;
        private int $code_client;
        private date $date_entree;
        private date $date_sortie;

        function __construct(date $date_reservation, int $num_chamb, int $code_client, string $nationalite, $num_passport, $nom_prenom, $adresse, $telephone) {
            parent::__construct($nationalite, $num_passport, $nom_prenom, $adresse, $telephone);

            $this->date_reservation = $date_reservation;
            $this->num_chamb = $num_chamb;
            $this->code_client = $code_client;
            $this->date_entree =  $date_entree;
            $this->date_sortie =  $date_sortie;


        }
    }
?>
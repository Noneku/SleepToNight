<?php
class Reservation {
    
    private int $id;
    private DateTime $date_reservation;
    private DateTime $date_entre;
    private DateTime $date_sortie;
    private Chambre $chambre;
    private Client $client;

    function __construct($date_reservation, $date_entre, $date_sortie) {

    	$this-> date_reservation = $date_reservation;
    	$this-> date_entre = $date_entre;
    	$this-> date_sortie = $date_sortie;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of date_entre
     */ 
    public function getDate_entre()
    {
        return $this->date_entre;
    }

    /**
     * Set the value of date_entre
     *
     * @return  self
     */ 
    public function setDate_entre($date_entre)
    {
        $this->date_entre = $date_entre;

        return $this;
    }
}

?>
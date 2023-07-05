<?php
class Reservation {
    
    private int $id;
    private string $date_reservation;
    private string $date_entrer;
    private string $date_sortie;
    // private Chambre $chambre;
    private Client $client;

    function __construct($date_reservation, $date_entrer, $date_sortie, $client) {

    	$this-> date_reservation = $date_reservation;
    	$this-> date_entrer = $date_entrer;
    	$this-> date_sortie = $date_sortie;
        // $this-> chambre = $chambre;
        $this-> client = $client;
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
        return $this->date_entrer;
    }

    /**
     * Set the value of date_entre
     *
     * @return  self
     */ 
    public function setDate_entre($date_entrer)
    {
        $this->date_entrer = $date_entrer;

        return $this;
    }

    /**
     * Get the value of date_sortie
     */ 
    public function getDate_sortie()
    {
        return $this->date_sortie;
    }

    /**
     * Set the value of date_sortie
     *
     * @return  self
     */ 
    public function setDate_sortie($date_sortie)
    {
        $this->date_sortie = $date_sortie;

        return $this;
    }

    /**
    //  * Get the value of chambre
    //  */ 
    // public function getChambre()
    // {
    //     return $this->chambre;
    // }

    // /**
    //  * Set the value of chambre
    //  *
    //  * @return  self
    //  */ 
    // public function setChambre($chambre)
    // {
    //     $this->chambre = $chambre;

    //     return $this;
    // }

    /**
     * Get the value of client
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set the value of client
     *
     * @return  self
     */ 
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get the value of date_reservation
     */ 
    public function getDate_reservation()
    {
        return $this->date_reservation;
    }

    /**
     * Set the value of date_reservation
     *
     * @return  self
     */ 
    public function setDate_reservation($date_reservation)
    {
        $this->date_reservation = $date_reservation;

        return $this;
    }
}

?>
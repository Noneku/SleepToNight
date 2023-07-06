<?php
class Reservation {
    
    private int $id;
    private string $date_reservation;
    private string $date_entrer;
    private string $date_sortie;
    private  $id_chambre;
    private   $id_client;

    function __construct($date_reservation, $date_entrer, $date_sortie,$id_client,$id_chambre) {

    	$this-> date_reservation = $date_reservation;
    	$this-> date_entrer = $date_entrer;
    	$this-> date_sortie = $date_sortie;
        $this-> id_chambre = $id_chambre;
        $this-> id_client = $id_client;
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

    /**
     * Get the value of id_client
     */ 
    public function getId_client()
    {
        return $this->id_client;
    }

    /**
     * Set the value of id_client
     *
     * @return  self
     */ 
    public function setId_client($id_client)
    {
        $this->id_client = $id_client;

        return $this;
    }

    /**
     * Get the value of id_chambre
     */ 
    public function getId_chambre()
    {
        return $this->id_chambre;
    }

    /**
     * Set the value of id_chambre
     *
     * @return  self
     */ 
    public function setId_chambre($id_chambre)
    {
        $this->id_chambre = $id_chambre;

        return $this;
    }
}

?>
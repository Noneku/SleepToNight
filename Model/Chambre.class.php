<?php

class Chambre extends Categorie {

    private int $id;
    private float $prix;
    private int $etage;
    private Categorie $categorie;

    function __construct($prix, $etage) {

    	$this-> prix = $prix;
    	$this-> etage = $etage;
    }


    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of categorie
     */ 
    public function getCategorie()
    {
        return $this->categorie;
    }
}

?>
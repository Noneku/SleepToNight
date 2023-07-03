<?php

abstract class Client

{
    private string $nationalite;
    private string $num_passeport;
    private string $nom_prenom;
    private string $adresse;
    private string $telephone;
    

    function __construct(string $nationalite, string $num_passeport, string $nom_prenom, string $adresse, string $telephone) {

    	$this->nationalite = $nationalite;
    	$this->num_passeport = $num_passeport;
    	$this->nom_prenom = $nom_prenom;
    	$this->adresse = $adresse;
    	$this->telephone = $telephone;
    
    }

    /**
    * @return string
    */
    public function getNationalite(): string {
    	return $this->nationalite;
    }

    /**
    * @param string $nationalite
    */
    public function setNationalite(string $nationalite): void {
    	$this->nationalite = $nationalite;
    }

    /**
    * @return string
    */
    public function getnum_passeport(): string {
    	return $this->num_passeport;
    }

    /**
    * @param string $num_passeport
    */
    public function setnum_passeport(string $num_passeport): void {
    	$this->num_passeport = $num_passeport;
    }

    /**
    * @return string
    */
    public function getNom_prenom(): string {
    	return $this->nom_prenom;
    }

    /**
    * @param string $nom_prenom
    */
    public function setNom_prenom(string $nom_prenom): void {
    	$this->nom_prenom = $nom_prenom;
    }

    /**
    * @return string
    */
    public function getAdresse(): string {
    	return $this->adresse;
    }

    /**
    * @param string $adresse
    */
    public function setAdresse(string $adresse): void {
    	$this->adresse = $adresse;
    }

    /**
    * @return string
    */
    public function getTelephone(): string {
    	return $this->telephone;
    }

    /**
    * @param string $telephone
    */
    public function setTelephone(string $telephone): void {
    	$this->telephone = $telephone;
    }


    /**
    * @return string
    */
    public function __toString(): string {
    	return "Nationalite: {$this->nationalite}, Num_passeport: {$this->num_passeport}, Nom_prenom: {$this->nom_prenom}, Adresse: {$this->adresse}, Telephone: {$this->telephone}";
    }
}

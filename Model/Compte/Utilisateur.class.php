<?php

include ('Client.Absclass.php');

class Utilisateur extends Client
{
    private int $id;
    private string $nom_de_compte;
    private string $mot_de_passe;
    private Client $client;

    private static int $cptID = 0;
    
    function __construct(string $nom_de_compte, string $mot_de_passe, string $nationalite, string $num_passeport, string $nom_prenom, string $adresse, string $telephone) {
        parent::__construct($nationalite, $num_passeport, $nom_prenom, $adresse, $telephone);

        $this->id = Utilisateur::$cptID++;
    	$this->nom_de_compte = $nom_de_compte;
    	$this->mot_de_passe = $mot_de_passe;
    
    }

    /**
    * @return int
    */
    public function getId(): int {
    	return $this->id;
    }

    /**
    * @return string
    */
    public function getNom_de_compte(): string {
    	return $this->nom_de_compte;
    }

    /**
    * @return string
    */
    public function getMot_de_passe(): string {
    	return $this->mot_de_passe;
    }
    
    /**
    * @return Client
    */
    public function getClient(): Client {
        return $this->client;
    }

    /**
    * @param Client $client
    */
    public function setClient(Client $client): void {
        $this->client = $client;
    }
    /**
    * @return string
    */
    public function __toString(): string {
    	return "Id: {$this->id}, Nom_de_compte: {$this->nom_de_compte}, Mot_de_passe: {$this->mot_de_passe}";
    }

}

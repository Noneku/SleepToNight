<?php

	class DBManager
    {   private $bdd;

        //constructeur qui initialise la connxion à la BDD
        public function __construct()
        {
           $this->bdd = new PDO('mysql:host=localhost;dbname=sleeptonightv2;charset=utf8mb4', 'root', '');
        }

        //Methode qui renvoie la liste des employés
	    public function selectListeEmploye() : array
        {
            $stmt= $this->bdd->prepare("SELECT * FROM `test`; ");
            $stmt->execute();
            $listEmploi = $stmt->fetchAll();
            return $listEmploi;
        }

   
        //methode qui ajoute une personne
        public function insertEmploye( Utilisateur $utilisateur) : void {  

            $sql = "INSERT INTO utilisateur (nom_utilisateur, mot_de_passe,id_client, id_client) VALUES (?,?,?)";
            $stmt= $this->bdd->prepare($sql);
            $stmt->execute([
                $utilisateur->getNom_de_compte(), 
                $utilisateur->getMot_de_passe(), 
                $utilisateur->getId()
            ]);
        
        }

        // //methode qui supprime un employe par son noemp
        // public function supprEmploye($noemp) : void {

        // }

        // //methode qui mets à jour le salaire d'un amployé
        // public function updateSalaireEmploye($noemp, $sal) : void {

        // }

    }



?>
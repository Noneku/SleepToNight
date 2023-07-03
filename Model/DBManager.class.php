<?php

	class DBManager
    {   
        private $bdd;

        //constructeur qui initialise la connxion à la BDD
        public function __construct()
        {
           $this->bdd = new PDO('mysql:host=localhost;dbname=sleeptonightv2;charset=utf8mb4', 'root', '');
        }

        //Methode qui renvoie la liste des client
	    public function selectListeClient() : array
        {
            $stmt= $this->bdd->prepare("SELECT * FROM `client`; ");
            $stmt->execute();
            $listclient = $stmt->fetchAll();
            return $listclient;
        }

   
        //methode qui ajoute un client
        public function insertClient( $nationalite, $num_passe,$prenom_client,$adress_client,$tele_client) : void {       
            $sql = "INSERT INTO client (nationalite,numpasseprot ,prenom_client,adress_client,tele_client) VALUES (?,?,?,?,?)";
            $stmt= $this->bdd->prepare($sql);
            $stmt->execute([$nationalite,$num_passe,$prenom_client,$adress_client,$tele_client]);
        
        }

        // //methode qui supprime un employe par son noemp
        // public function supprEmploye($noemp) : void {

        // }

        // //methode qui mets à jour le salaire d'un amployé
        // public function updateSalaireEmploye($noemp, $sal) : void {

        // }
        public function conexionUser(){
            
            }
    }


$pass=password_hash($pass,PASSWORD_DEFAULT)
?>
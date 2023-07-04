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

        //methode qui ajoute une personne
        public function insertEmploye( Utilisateur $utilisateur) : void {
            
            //Insert Client
            $sql = "INSERT INTO client (nationalite, num_passeport, nom_prenom, adresse, telephone) VALUES (?,?,?,?,?)";
            $stmt= $this->bdd->prepare($sql);
            $stmt->execute([
                $utilisateur->getNationalite(), 
                $utilisateur->getnum_passeport(), 
                $utilisateur->getNom_prenom(),
                $utilisateur->getAdresse(),
                $utilisateur->getTelephone(),
            ]);  
            
            //Get last ID in table Client
            $id_Client = $this->bdd->lastInsertId();

            //Insert User
            $sqlUser = "INSERT INTO utilisateur (nom_utilisateur, mot_de_passe, id_client) VALUES (?,?,?)";
            $stmtUser = $this->bdd->prepare($sqlUser);
            $stmtUser->execute([
                $utilisateur->getNom_de_compte(),
                $utilisateur->getMot_de_passe(),
                $id_Client
            ]);  
      }

        // //methode qui supprime un employe par son noemp
        // public function supprEmploye($noemp) : void {

        // }

        // //methode qui mets à jour le salaire d'un amployé
        // public function updateSalaireEmploye($noemp, $sal) : void {

        // }
        //methode de connexion d'un utilisateur
        public function connexionUser($login,$password){
            //selectionné le nom d'utilisateur
            $sql="SELECT * FROM utilisateur where nom_utilisateur='$login'";
            $result= $this->bdd->prepare($sql);
            $result->execute();
            //si une ligne avec le nom d'utilisateur existe alors on controle le mot de passe
            if($result->rowCount()>0)
        
            { 
                $data = $result->fetchAll();
                //verification du mot de passe hashé
                if (password_verify($password,$data[0]["mot_de_passe"])){

                    echo "Connexion effectuée";
                $_SESSION['nom_utilisateur'] = $login;

                }else{

                    echo "connexion echoué";

                }
                
            }else{

                echo "vous n'êtes pas inscrit";

            }
        }

            

        /**
         * Get the value of bdd
         */ 
        public function getBdd()
        {
                return $this->bdd;
        }

        /**
         * Set the value of bdd
         *
         * @return  self
         */ 
        public function setBdd($bdd)
        {
                $this->bdd = $bdd;

                return $this;
        }
    }


?>
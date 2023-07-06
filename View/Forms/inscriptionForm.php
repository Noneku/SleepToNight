<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../stylesheet/inscription.css">
    <title>Document</title>
      <!-- Font Awesome -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    
</head>


<header>
		
    <nav class="navbar">
        <div class="container">
            <div class="navbar-logo">
                <a href="../../index.php"><img src="../../img/logoS.png" alt="Logo"></a>         
            </div>

            <div class="navbar-search">
                <input type="text" placeholder="Recherche">
                <button id = "bouton">Rechercher</button>
            </div>

            <div class="navbar-links">
                <a href="./connexionForm.php">Connexion</a>
                <a href="./inscriptionForm.php">Inscription</a>
                <a href="#">Liste des chambres</a>
            </div>
        </div>
    </nav> 
</header>

<body>



<form action='../../Controller/inscription.ctrl.php' method="POST">
    <div class ="containe">
        <h1>Inscription</h1>
  
        <label abel><b>Nom de Compte</b></label>
        <input type="text"placeholder="Nom de Compte" id="nom_utilisateur" name="nom_utilisateur" required>
        <label abel><b>Mot de Passe</b></label>
        <input type="password"placeholder="Mot de Passe" id="mot_de_passe" name="mot_de_passe" required>
        <label abel><b>Nom Prénom</b></label> 
        <input type="text"placeholder="Nom Prénom" id="nom_prenom" name="nom_prenom" required>
        <label abel><b>Nationalité</b></label> 
        <input type="text"placeholder="Nationalité" id="nationalite" name="nationalite"  name="nationality" required>
        <label abel><b>Identifiant Passeport</b></label>
        <input type="text"placeholder="Identifiant Passeport" id="num_passeport" name="num_passeport" required>
        <label abel><b>Adresse</b></label>
        <input type="text" placeholder="Adresse" id="adresse" name="adresse" required>
        <label><b>Numéro de Téléphone</b></label>
        <input type="phonenumber" placeholder="Numéro de Téléphone" id="telephone" name="telephone" required>
        <input type="submit" id='submit' value='LOGIN' >
        <a href="./connexionForm.php">Déjà inscrit ? Connectez vous</a>
    </div>
 
</form>
 
</body>



<footer>
		<div class="social">
		  <p>Follow us on social media</p>
		  <ul class="wrapper">
			<a href="#" target="_blank">
			  <li class="icon linkedin">
				<span class="tooltip">LinkedIn</span>
				<span><i class="fab fa-linkedin"></i></span>
			  </li>
			</a>
			<a href="#" target="_blank">
			  <li class="icon github">
				<span class="tooltip">GitHub</span>
				<span><i class="fab fa-github"></i></span>
			  </li>
			</a>
			<a href="#" target="_blank">
			  <li class="icon facebook">
				<span class="tooltip">Facebook</span>
				<span><i class="fab fa-facebook-f"></i></span>
			  </li>
			</a>
			<a href="#" target="_blank">
			  <li class="icon instagram">
				<span class="tooltip">Instagram</span>
				<span><i class="fab fa-instagram"></i></span>
			  </li>
			</a>
			<a href="#" target="_blank">
			  <li class="icon twitter">
				<span class="tooltip">Twitter</span>
				<span><i class="fab fa-twitter"></i></span>
			  </li>
			</a>
			
		  </ul>
		</div>
		<div class="final_text"></div>
		<p>Copyright &copy; All rights reserved
		  <br>Designed by RAYS, 2023
		</p>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
		crossorigin="anonymous"></script>
</html>





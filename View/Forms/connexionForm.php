<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../stylesheet/connexion.css">
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
    <div id="containe">
 
    <form action="../../Controller/authentification.ctrl.php" method="POST">
        <h1>Connexion</h1>
        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required>
        <input type="submit" id='submit' value='LOGIN' >
        <a href="./inscriptionForm.php">Pas de compte ? Inscrivez vous</a>
    </form>
</div>
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


















<!-- <form action = "../Controller/authentification.ctrl.php" method="post" style="height: 1000px;"> -->
    <!-- Email input -->
    <!-- <div class="form-outline mb-4">
        <input type="text" id="nom_utilisateur"  name="nom_utilisateur" class="form-control" />
        <label class="form-label" for="nom_utilisateur">Nom de compte</label>
    </div> -->

    <!-- Password input -->
    <!-- <div class="form-outline mb-4">
        <input type="password" id="mot_de_passe" name="mot_de_passe" class="form-control" />
        <label class="form-label" for="mot_de_passe">Password</label>
    </div> -->

    <!-- 2 column grid layout for inline styling -->
    <!-- <div class="row mb-4">
        <div class="col d-flex justify-content-center"> -->
            <!-- Checkbox -->
            <!-- <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                <label class="form-check-label" for="form2Example34"> Remember me </label>
            </div>
        </div>

        <div class="col"> -->
            <!-- Simple link -->
            <!-- <a href="#!">Forgot password?</a>
        </div>
    </div> -->

    <!-- Submit button -->
    <!-- <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button> -->

    <!-- Register buttons -->
    <!-- <div class="text-center">
        <p>Pas encore membre ? <a href="../inscription.view.php">Crée un compte</a></p>
    </div>
</form> -->
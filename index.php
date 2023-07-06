<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./View/stylesheet/styles.css">
    <title>Hotel SleepToNight</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
</head>


    <?php include('./Model/DBManager.class.php');
        session_start();
        $db = new DBManager();  
        $listChambres = $db->selectListeChambre();
    ?>
<header>
		
<nav class="navbar">
  <div class="container">
    <div class="navbar-logo">
      <a href="./index.php">
        <img src="./img/logoS.png" alt="Logo">
      </a>
    </div>
    <div class="navbar-search">
      <input type="text" placeholder="Recherche">
      <button id = "bouton">Rechercher</button>
    </div>
    <div class="navbar-links">
      <a href="./View/Forms/connexionForm.php">Connexion</a>
      <a href="./View/Forms/inscriptionForm.php">Inscription</a>
      <a href="#">Liste des chambres</a>
    </div>
  </div>
</nav>

        <!-- Caroussel -->
        <div id="carouselExampleIndicators" class="carousel slide">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
				aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
				aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
				aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="./img/spa.jpg" class="spa"  alt="...">
			</div>
			<div class="carousel-item">
				<img src="./img/chambre.png" class="spa " alt="...">
			</div>
			<div class="carousel-item">
				<img src="./img/restaurant.png" class="spa " alt="...">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
			data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
			data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
    
</header>
<body>






    <main>
        
            <?php
                foreach ($listChambres as $key => $chambre) :
            ?>
            <div class="card" style="width: 18rem;">
                <img src="https://picsum.photos/200" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Chambre numéro : <?php echo $chambre['id_chambre']?></h5>
                    <h4 class="card-title">Prix : <?php echo $chambre['prix'] . "€"?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="./View/connexion.view.php" class="btn btn-primary">Consulter</a>
                </div>
            

            <?php endforeach; ?>
        
    </main>
   





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
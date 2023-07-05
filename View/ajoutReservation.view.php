<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet/styles.css">
    <title>Hotel SleepToNight</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
<form class="box" action="..\Controller\ajoutReservation.ctrl.php" method="post" >
<h1 class="box-title">Reservation</h1>
<label for="date_reservation">Date de Réservation Date arrivée date de Départ</label><br>
<input type="date" class="box-input" name="date_reservation" value="<?php echo date('Y-m-d');?>" >
<label for="date_entrer">Date arrivée</label><br>
<input type="date" class="box-input" name="date_entrer" placeholder="Date d'arrivée">
<input type="date" class="box-input" name="date_sortie" placeholder="Date de depart">
<input type="submit" value="Reserver " name="submit" class="box-button">
</form>
</body>

</html>
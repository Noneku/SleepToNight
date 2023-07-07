<?php session_start()?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>
    <?php include('./Forms/reservationForm.php');
     var_dump($_POST['date_reservation']);
     var_dump($_POST['date_enter']);
     var_dump($_POST['date_sortie']);
     var_dump($_SESSION['id_client']);
     var_dump($_POST['id_chambre']); ?>
</main>
</body>
</html>
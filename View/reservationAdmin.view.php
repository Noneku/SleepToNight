<!DOCTYPE html>
<html lang= "en">
<head>
    <meta charsert= "UTF-8">
    <title>Réservation</title>
    <link rel="stylesheet"  href="admin.View.css">
    
   
</head><?php

session_start()

?>
<body>
<header>
        <nav>
            <ul>
                <li><a href= './cateAdmin.view.php'>Catégorie</a></li>
                <li><a href= './admin.view.php'>Accueil</a></li>
                <li><a href='./clientAdmin.view.php'>Historique des clients</a></li>
                <li><a href='./chambreAdmin.view.php'>Liste des Chambres</a></li>
                <li><a href='./reserAdmin.view.php'>Liste des Utilisateur</a></li>
            </ul>
        </nav>
</header>
        <main>
           
           
        </main>
<table>
  <thead>
    <tr>
      <th>ID Réservations</th>
      <th>Date Réservation</th>
      <th>Date d'Entrée</th>
      <th>Date de Sortie</th>
      <th>ID Chambres</th>
      <th>ID Client</th>
    </tr>
  </thead>
  <tbody><?php include '../Controller/reserExecute.ctrl.php';
    $reservationListe = $db->selectListeReservation();?>
    
    <?php foreach ($reservationListe as $reservation) : ?>
    <tr>
      <td><?php echo $reservation['id_reservation']; ?></td>
      <td><?php echo $reservation['date_reservation']; ?></td>
      <td><?php echo $reservation['date_entrer']; ?></td>
      <td><?php echo $reservation['date_sortie']; ?></td>
      <td><?php echo $reservation['id_chambre']; ?></td>
      <td><?php echo $reservation['id_client']; ?></td>
      
    </tr>
    <?php endforeach; ?>
  </tbody>
    
    
    
  
</table>
            
       
    
    
</body>

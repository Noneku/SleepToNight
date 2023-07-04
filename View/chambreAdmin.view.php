<!DOCTYPE html>
<html lang= "en">
<head>
    <meta charsert= "UTF-8">
    <title>Historie des Client</title>
    <link rel="stylesheet"  href="admin.View.css">
    
   
</head><?php

session_start()

?>
<body>
<header>
        <nav>
            <ul>
                <li><a href= './cateAdmin.view.php'>Catégorie</a></li>
                <li><a href= './reserAdmin.view.php'>Réservations</a></li>
                <li><a href= './clientAdmin.view.php'>Historique des Clients</a></li>
                <li><a href='./admin.view.php'>Accueil</a></li>
                <li><a href='./utiliAdmin.view.php'>Liste des Utilisateur</a></li>
            </ul>
        </nav>
</header>
        <main>
           
           
        </main>
<table>
  <thead>
    <tr>
      <th>ID Chambres</th>
      <th>Prix</th>
      <th>Etage</th>
      <th>ID Catégorie</th>
    </tr>
  </thead>
  <tbody><?php include '../Controller/chambreExecute.ctrl.php';
    $chambreListe = $db->selectListeChambre();?>
    
    <?php foreach ($chambreListe as $chambre) : ?>
    <tr>
      <td><?php echo $chambre['id_chambre']; ?></td>
      <td><?php echo $chambre['prix']; ?></td>
      <td><?php echo $chambre['etage']; ?></td>
      <td><?php echo $chambre['id_categorie']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
    
    
    
  
</table>
            
       
    
    
</body>

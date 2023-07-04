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
                <li><a href= './admin.view.php'>Accueil</a></li>
                <li><a href='./chambreAdmin.view.php'>Liste des Chambres</a></li>
                <li><a href='./utiliAdmin.view.php'>Liste des Utilisateur</a></li>
            </ul>
        </nav>
</header>
        <main>
           
           
        </main>
<table>
  <thead>
    <tr>
      <th>ID Client</th>
      <th>Nationalite</th>
      <th>Numéro de Passeport</th>
      <th>Nom et Prenom</th>
      <th>Adresse</th>
      <th>Téléphone</th>
    </tr>
  </thead>
  <tbody><?php include '../Controller/clientExecute.ctrl.php';
    $clientListe = $db->selectListeClient();?>
    
    <?php foreach ($clientListe as $client) : ?>
    <tr>
      <td><?php echo $client['id_client']; ?></td>
      <td><?php echo $client['nationalite']; ?></td>
      <td><?php echo $client['num_passeport']; ?></td>
      <td><?php echo $client['nom_prenom']; ?></td>
      <td><?php echo $client['adresse']; ?></td>
      <td><?php echo $client['telephone']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
    
    
    
  
</table>
            
       
    
    
</body>

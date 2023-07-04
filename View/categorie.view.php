<!DOCTYPE html>
<html lang= "en">
<head>
    <meta charsert= "UTF-8">
    <title>Catégorie</title>
    <link rel="stylesheet"  href="admin.View.css">
    
   
</head><?php

session_start()

?>
<body>
<header>
        <nav>
            <ul>
                <li><a href='./admin.view.php'>Accueil</a></li>
                <li><a href='./reserAdmin.view.php'>Réservation</a></li>
                <li><a href='./clientAdmin.view.php'>Historique des clients</a></li>
                <li><a href='./chambreAdmin.view.php'>Liste des Chambres</a></li>
                <li><a href= './utiliAdmin.view.php'>Utilisateur</a></li>
            </ul>
        </nav>
</header>
        <main>
           
           
        </main>
<table>
  <thead>
    <tr>
      <th>ID Catégorie</th>
      <th>Désignation</th>
    </tr>
  </thead>
  <tbody><?php include '../Controller/catExecute.ctrl.php';
    $categorieListe = $db->selectListeCategorie();?>
    
    <?php foreach ($categorieListe as $categorie) : ?>
    <tr>
      <td><?php echo $categorie['id_categorie']; ?></td>
      <td><?php echo $categorie['designation']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
    
    
    
  
</table>
            
       
    
    
</body>

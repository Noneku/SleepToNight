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
                <li><a href='./reserAdmin.view.php'>Réservation</a></li>
                <li><a href='./clientAdmin.view.php'>Historique des clients</a></li>
                <li><a href='./chambreAdmin.view.php'>Liste des Chambres</a></li>
                <li><a href='./admin.view.php'>Accueil</a></li>
            </ul>
        </nav>
</header>
        <main>
           
           
        </main>
<table>
  <thead>
    <tr>
      <th>ID Utilisateur</th>
      <th>Nom de l'Utilisateur</th>
      <th>Mot de Passe</th>
      <th>ID Client</th>
    </tr>
  </thead>
  <tbody><?php include '../Controller/utiliExecute.ctrl.php';
    $utilisateurListe = $db->selectListeUtilisateur();?>
    
    <?php foreach ($utilisateurListe as $utilisateur) : ?>
    <tr>
      <td><?php echo $utilisateur['id_utilisateur']; ?></td>
      <td><?php echo $utilisateur['nom_utilisateur']; ?></td>
      <td><?php echo $utilisateur['mot_de_passe']; ?></td>
      <td><?php echo $utilisateur['id_client']; ?></td>
     
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
            
       
    
    
</body>

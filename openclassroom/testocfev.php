<?php
  $bdd= new PDO('mysql:host=localhost;dbname=TestOC', 'root', 'user');
  $reponse = $bdd->query('SELECT * FROM TestOCFEV');
  while ($donnees = $reponse->fetch())
  {
    echo '<p>' . $donnees['Titre'] . '</p>';
  }



 ?>

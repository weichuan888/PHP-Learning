<?php
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'user', 'root');
  }
  catch(Exception $e)
  {
    die('Erreur : ' .$e->getMessage());
  }
  // var_dump($bdd);

  $resultat= $bdd->query('SELECT * FROM meteo');
  $donnees = $resultat->fetchAll();

  // var_dump($donnees);
  // var_dump($resultat) va afficher les données de la bdd tel quel.
  // var_dump($donnees) va afficher concretement ce qu'il ya dans le tableau.
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>MySQL exo</title>
   </head>
   <body>
     <pre>
       <?php
          // var_dump($donnees);
          // ici j'incorprore dans mon html, pour afficher le tableau de la bdd dans le html
        ?>
    </pre>
     
      <form class="formulaire" action="index.php" method="post">
        <input type="text" name="ville" value="">
        <input type="text" name="température haute" value="">
        <input type="text" name="température bas" value="">
        <button type="submit" name="button">ok</button>
      </form>

   </body>
 </html>

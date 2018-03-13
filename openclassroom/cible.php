<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>formulaire envoie</title>
  </head>
  <body>
    <p> Bonjour
      <?php
      if (isset($_POST['nom'])) {
          echo htmlspecialchars($_POST['nom']);
      }
      else
      {
        echo "Veuillez indiquez votre putain de nom.";
      }


     ?></p>

  </body>
</html>

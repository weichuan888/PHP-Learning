<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Ma page web</h1>
  <p>Cette page contient du code html avec des balises php.<br/>
  <?php echo "<strong>Bonjour</strong>"; ?>

  Voici quelques petits tests:

  </p>
  <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?></p>
  <ul>
    <li style="color: blue;">texte en bleu</li>
    <li style="color: red;"> texte en rouge</li>
    <li style="color:green;"> texte en vert</li>
  </ul>
  <a href="bonjour.php?manger=chocolat&amp;boire=coca">Alimentation</a>
  <form action="cible.php" method="post">
    <p><label>Nom <input type="text" name= "nom"></label></p>
    <label><input type="submit" name="envoyer"></label>
  </form>

</body>
</html>

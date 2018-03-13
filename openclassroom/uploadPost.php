<?php
try
{
 $bdd = new PDO('mysql:host=localhost;dbname=4wings;charset=utf8', 'root', 'user');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO Team (url_Img, Title, Description) VALUES(?, ?, ?)');
$req->execute(array($_POST['fichiertruc'], $_POST['name'], $_POST['message']));

 ?>

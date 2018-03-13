<?php

$personne = array (
  "nom" => "Albert",
  "prenom" => "Marcus",
  "age" => 99,
  "pays" => "Au fin fond du Pôle Nord"

);

foreach ($personne as $nom => $value) {
  echo  '[' . $nom . '] vaut ' . $value . "<br/>";
}
 


 ?>

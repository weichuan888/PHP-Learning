<?php
  // $AgeDuVisiteur = 20;
  // $prix = 15;
  // $quantite= 100;
  // $total = $prix * $quantite;
  // echo "Le visiteur de " . $AgeDuVisiteur . " ans va recevoir " . $total . " euros de réduction.";

  // $age = 15;
  // $pays = "Belgique";
  //
  // if ($pays=="France" || $pays == "Belgique") {
  //   echo "Bienvenue sur notre site! <br/>";
  //   $autorisation_enter = true;
  // }
  // else {
  //   echo "Ah nous ne savons pas parler neerlandais! <br/>";
  //   $autorisation_enter=false;
  // }
  // echo " avez vous l'autorisation d'entrer ? la réponse est :" . $autorisation_enter;
  //

  // $note = 10;
  //
  // if ($note > 18) {
  //   echo "Bravo!";
  // }
  // else if ($note <=18 && $note >=12) {
  //   echo "Assez bien, continue !";
  // }
  // else
  // {
  //   echo "médiocre, tu devras revoir tes cours !";
  // }

  // $note = 7;
  // switch ($note) {
  //   case 10:
  //     echo "moyen, c'est limite!";
  //     break;
  //   case 14:
  //     echo "Assez Bien, mais il ya mieux!";
  //   case 8:
  //     echo "aie aie tu dois absolument revoir tes cours!";
  //   default:
  //     echo "???";
  //     break;
  // }

  $pays="France";
  if($pays=="suisse") {
      echo "Bienvenue sur mon site <br/>";
      $autorisation_enter = "oui";
  }
  else {
    echo "vous vous êtes trompés de site.<br/>";
    $autorisation_enter = "non";
  }
  echo "avez vous l'autorisation d'entrer ? La réponse est " . $autorisation_enter;

  $autorisation_enter = "";
  if ($autorisation_enter == "oui") {
    echo "<br/> tu peux rentrer";
  }
  else if ($autorisation_enter == "non") {
    echo "<br/>erreur";
  }
  else  {
    echo "<br/>euuh tu es qui ?";
  }

 ?>

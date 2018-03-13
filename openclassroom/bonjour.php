<?php
if (isset($_GET['manger']) && isset($_GET['boire']) && isset($_GET['repeter']))
{
  $nbRepetitions= (int) $_GET['repeter'];
  if ($nbRepetitions <10) {
    for ($repetition = 0; $repetition  < $nbRepetitions ; $repetition ++) {
      echo '<p> Bonjour j aime manger du ' .  $_GET['manger'] . ' ' . $_GET['boire'] . '</p>';
    }
  }

}
else
{
  echo 'Tu as fini de manger';
}


 ?>

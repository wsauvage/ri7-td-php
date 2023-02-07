<?php

/*
  Écrivez un code PHP avec switch qui demande à l'utilisateur de saisir un jour 
  de la semaine (le chiffre) et affiche le jour suivant correspondant.
*/

$dayNumber = 10;

switch ($dayNumber) {
  case 1:
    echo "<p>Lundi</p>";
    break;
  case 2:
    echo "<p>Mardi";
    break;
  case 3:
    echo "<p>Mercredi</p>";
    break;
  case 4:
    echo "<p>Jeudi</p>";
    break;
  case 5:
    echo "<p>Vendredi</p>";
    break;
  case 6:
    echo "<p>Samedi</p>";
    break;
  case 7:
    echo "<p>Dimanche</p>";
    break;
  default:
    echo "<p>Vôtre numéro ne désigne aucun jours dans la semaine.</p>";
    break;
}

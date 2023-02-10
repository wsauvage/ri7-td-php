<?php

/*
  Écrivez une boucle for qui parcourt un tableau d'entiers et utilise le mot 
  clé continue pour ignorer les nombres négatifs. Afficher tous les nombres 
  entié
*/

$numbers = [1, 1, -1, -1, 1, -1];

$sum = 0;

foreach ($numbers as $number) { 
  if ($number < 0) {
    continue;
  }
  echo "<p>$number</p>";
}

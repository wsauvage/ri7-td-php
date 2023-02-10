<?php

/*
  Écrivez une boucle for qui parcourt un tableau d'entiers et utilise le mot clé
  break lorsqu'un nombre spécifique est trouvé pour sortir de la boucle.
*/

$numbers = [1, 4, 2, 3, 7, 42, 12, 3];

$sum = 0;

foreach ($numbers as $number) { 
  if ($number === 42) {
    break;
  }
  
  echo "<p>$number</p>";
}

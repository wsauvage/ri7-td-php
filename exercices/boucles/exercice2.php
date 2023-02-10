<?php

/*
  Utilisez la boucle foreach pour parcourir un tableau d'entiers et afficher la 
  somme de tous les éléments du tableau.
*/

$numbers = [1, 4, 2, 3];

$sum = 0;

foreach ($numbers as $number) { 
  $sum += $number;
}

echo "<h1>$sum</h1>";

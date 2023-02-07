<?php

/*
  Écrivez un code PHP qui calcule la somme et la moyenne des éléments d'un 
  tableau de nombres (généré aléatoirement).
  Afficher le tableaux, la somme et la moyenne.
*/

$numbers = [];

for ($i = 0; $i < random_int(5, 20); $i++) { 
  $numbers[] = random_int(0, 10);
}

$sum = 0;

foreach ($numbers as $n) {
  $sum += $n;
}

$average = $sum / count($numbers);

?>

<pre>
  <?= print_r($numbers) ?>
</pre>

<p>Somme : <?= $sum ?></p>

<p>Moyenne : <?= $average ?></p>

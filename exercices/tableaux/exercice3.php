<?php

/*
  Écrivez un code PHP qui trie un tableau de nombres dans l'ordre croissant. 
  Afficher le tableau avant et aprés le trie avec print_r. 
  Essayez d'innover la façon dont vous allez créer le tableau de nombre.
*/

$numbers = [];

for ($i = 0; $i < 100; $i++) { 
  $numbers[] = $i;
}

shuffle($numbers);

?>

<strong>Avant : </strong>
<pre>
  <?= print_r($numbers); ?>
</pre>

<br>

<?php sort($numbers) ?>

<strong>Aprés : </strong>
<pre>
  <?= print_r($numbers); ?>
</pre>

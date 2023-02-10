<?php

/*
  Faire un formulaire qui permet de faire la somme de 2 nombres et affiche le
  résultat. Attention, il faut vérifier les donnés recues avant de faire le
  calcule, si une mauvaise valeur est rentré on devra afficher une erreur à 
  l'utillisateur.

  Bonne chance!
*/

$result = null;
$error = null;

if (isset($_GET['a']) && isset($_GET['b'])) {
  if (is_numeric($_GET['a']) && is_numeric($_GET['b'])) {
    $result = $_GET['a'] + $_GET['b'];
  } else {
    $error = 'Mauvaises valeurs entrées';
  }
}

?>

<form action="/exercices/formulaires/exercice4.php">
  <label>
    <input type="text" name="a" placeholder="a">
  </label>
  <br>
  <br>
  <label>
    <input type="text" name="b" placeholder="b">
  </label>
  <br>
  <br>
  <label>
    <input type="submit" value="créer">
  </label>
</form>
<p style="color: red;"><?= $error ?></p>

<h1>
  result : <?= $result ?? 'aucun' ?>
</h1>

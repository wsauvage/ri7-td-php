<?php

/*
  Créez un formulaire en PHP qui permet à l'utilisateur de saisir une couleur 
  HEX, une largeur, une hauteur, un arrondie des bord (border-radius), 
  et de génèrer un rectangle (ou carré) sur la page web.
*/

?>

<form action="/exercices/formulaires/exercice3.php" method="post">
  <label>
    <input type="text" name="width" placeholder="largeur en px">
  </label>
  <br>
  <br>
  <label>
    <input type="text" name="height" placeholder="hauteur en px">
  </label>
  <br>
  <br>
  <label>
    <input type="text" name="background_color" placeholder="couleur en hex">
  </label>
  <br>
  <br>
  <label>
    <input type="text" name="border_radius" placeholder="arrondi en px">
  </label>
  <br>
  <br>
  <label>
    <input type="submit" value="créer">
  </label>
</form>

<div style="
  width: <?= $_POST['width'] ?? '0' ?>px;
  height: <?= $_POST['height'] ?? '0' ?>px;
  background-color: #<?= $_POST['background_color'] ?? 'none' ?>;
  border-radius: <?= $_POST['border_radius'] ?? '0' ?>px;">
</div>

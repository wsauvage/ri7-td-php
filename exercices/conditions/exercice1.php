<?php

/*
  Écrivez un code PHP pour afficher le message "Bienvenue sur notre site." 
  si l'âge de l'utilisateur est supérieur ou égal à 18 ans, sinon afficher 
  "Vous n'êtes pas autorisé à accéder à ce site."
*/

$age = 18;

if ($age >= 18) {
  echo "<p>Bienvenue sur notre site.</p>";
} else {
  echo "<p>Vous n'êtes pas autorisé à accéder à ce site.</p>";
}

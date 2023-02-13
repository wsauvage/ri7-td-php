<?php

/* Faire une regex pour le nom et prénom, testez la regex */

$regex = '/[a-zA-Z-]/';
$firstname = 'Axel';
$lastname = 'Mitschi';

if (preg_match($regex, $firstname)) {
  echo "prénom est ok\n";
}

if (preg_match($regex, $lastname)) {
  echo "nom est ok\n";
}

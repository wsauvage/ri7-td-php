<?php

/* Faire une regex pour les emails, testez la regex */

$regex = '/[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]+/';
$email = 'axel.mitschi@gmail.com';

if (preg_match($regex, $email)) {
  echo "email est ok\n";
}


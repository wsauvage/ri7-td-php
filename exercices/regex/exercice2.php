<?php

/* Faire une regex pour les numéros de tel, testez la regex */

$regex = '/[0-9]{10}/';
$number = '0635268806';

if (preg_match($regex, $number)) {
  echo "numéro de de tel est ok\n";
}


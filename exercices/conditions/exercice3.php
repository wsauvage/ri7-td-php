<?php

$age = 0;

switch ($age) {
  case $age <= 0:
    echo "T'es pas encore né.";
    break;
  case $age < 18:
    echo "Vous êtes mineur.";
    break;
  case $age >= 18 && $age < 25:
    echo "Vous êtes un jeune adulte.";
    break;
  case $age >= 25 && $age < 65:
    echo "Vous êtes un adulte.";
    break;
  default:
    echo "Vous êtes à la retraite. (ou pas mdr)";
}
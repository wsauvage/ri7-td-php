<?php

/*
  Écrivez un code PHP qui détermine si un nombre est pair ou impair. 
  Si le nombre est pair, affichez "Le nombre est pair.", sinon affichez 
  "Le nombre est impair.", si possible faites le en ternaire.
*/

$number = 12;

echo $number % 2 === 0 ? "<p>Le nombre est pair.</p>" : "<p>Le nombre est impair.</p>";

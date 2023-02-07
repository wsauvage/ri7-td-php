<?php

/*
  Écrivez un code PHP qui déclare un tableau contenant les noms de 5 fruits, 
  puis affiche le contenu de ce tableau à l'aide d'une boucle.
*/

$fruits = ['orange', 'apple', 'strawberry', 'pear', 'banana'];

for ($i = 0; $i < count($fruits); $i++) { 
  echo "<p>$fruits[$i]</p>";
}

<?php

/*
  Écrivez un code PHP qui déclare un tableau associatif contenant les noms et 
  prix de 5 produits, puis affiche le contenu de ce tableau à 
  l'aide d'une boucle foreach.
*/

$products = [
  [
    "name" => "orange",
    "price" => 3
  ],
  [
    "name" => "apple",
    "price" => 4
  ],
  [
    "name" => "strawberry",
    "price" => 10
  ],
  [
    "name" => "pear",
    "price" => 3
  ],
  [
    "name" => "banana",
    "price" => 5
  ],
];

foreach ($products as $product) {
  echo "<p>Nom : $product[name]</p>";
  echo "<p>Prix : $product[price] €</p>";
  echo "<br>";
}

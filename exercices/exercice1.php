<?php

// Exercice 1

$connect = true;

if($connect == true) {
    echo "<p>Vous êtes connecté !</p>";
} else {
    echo "<p>Vous n'êtes pas connecté !</p>";
}

// En ternaire

$connectTexte = $connect === true ? "<p>Vous êtes connecté !</p>" :
    "<p>Vous n'êtes pas connecté !</p>";
    
echo $connectTexte;
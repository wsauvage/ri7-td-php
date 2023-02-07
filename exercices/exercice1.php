<!--<html>-->
<!--    <body>-->
<!--        --><?php
//            $bool = false
//        ?>
<!--        <p>-->
<!--            --><?//=  $bool ? "Vous êtes connecté !" : "Vous n’êtes pas connecté" ?>
<!--        </p>-->
<!--    </body>-->
<!--</html>-->

<?php
// Exercice 1
$connect = false;
if($connect == true)
    echo "<p>Vous êtes connecté !</p>";
else
    echo "<p>Vous n'êtes pas connecté !</p>";

//ternaire
$connectTexte = $connect===true ? "<p>Vous êtes connecté !</p>" :
    "<p>Vous n'êtes pas connecté !</p>";
echo $connectTexte;
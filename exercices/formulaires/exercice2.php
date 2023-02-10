<?php

/*
  Créez un formulaire en PHP qui permet à l'utilisateur de saisir une couleur 
  HEX et de l'afficher en arrière-plan de la page web.

  Instructions:

  1. Créez une page HTML qui contient un formulaire pour la saisie d'une 
  couleur HEX. 
  
  2. Utilisez le code PHP pour récupérer la valeur de l'input et l'afficher en 
  arrière-plan de la page web en utilisant le code 
  CSS suivant: background-color: #HEX;.

  Bonne chance!
*/

$color = empty($_GET['color']) ? 'none' : $_GET['color'];

?>

<html style="background-color: <?= $color ?>;">
  <body>
    <form action="/exercices/formulaires/exercice2.php">
      <div>
        <label for="color">Couleur en hexadecimal :</label>
        <input type="text" id="color" name="color">
      </div>
      <div>
        <input type="submit" value="soumettre">
      </div>
    </form>
  </body>
</html>



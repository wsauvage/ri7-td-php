<?php

/*
  Écrivez un formulaire de login qui demande à l'utilisateur de saisir son nom 
  d'utilisateur et son mot de passe, puis vérifiez ces informations pour déterminer 
  si l'utilisateur peut accéder à un compte sécurisé. Vous choisissez le mot de 
  passe et le nom d'utilisateur du compte sécurisé que vous voulez. (Créer un
  nouveau fichier php pour la page à sécuriser)
*/

?>

<h1>Connexion</h1>
<form action="/exercices/formulaires/exercice1-secure-page.php" method="POST">
  <div>
    <label for="username">Nom d'utilisateur :</label>
    <input id="username" name="username" type="text" placeholder="Nom d'utilisateur">
  </div>
  <div>
    <label for="password">Mot de passe :</label>
    <input id="password" name="password" type="password" placeholder="Mot de passe">
  </div>
  <div>
    <input type="submit" value="Connexion">
  </div>
</form>
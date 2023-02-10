<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($username !== 'admin' || $password !== 'admin') {
  header('Location: /exercices/formulaires/exercice1.php');
  exit();
}

?>

<h1>Bienvenue sur la page d'administration</h1>
<a href="/exercices/formulaires/exercice1.php">Retour à la page de connexion</a>
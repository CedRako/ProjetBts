<?php
session_start();
include('bibliotheque.php');

unset($_SESSION['pseudo']);
$message = 'Vous êtes déconnecté';
$erreur = false;

///////////////////////////////////// PARTIE VISIBLE /////////////////////////////////////
header('Location: acceuil.php');;
include('navbar.php');
if ($erreur)
  {
    echo ' <a href="compte.php">Veuillez réessayer</a>';
  }
include('pied.html');

?>
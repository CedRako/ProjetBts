<?php
session_start();

include("bibliotheque.php");

$villeDep=$_POST["villeDep"];
$villeArr=$_POST["villeArr"];
$place=$_POST["place"];
$date=$_POST["date"];
$pseudo=$_SESSION['pseudo'];

$connexion = connecter();
$requete ="SELECT IdClient from client where pseudo='$pseudo'";
$resultat = mysqli_query($connexion, $requete);
$ligne = mysqli_fetch_assoc($resultat);
mysqli_close($connexion);
$idclient=$ligne["IdClient"];


$connexion = connecter();
$requete = "INSERT INTO reservation (villeDep,villeArr,nbplace,dateR,idclient)
            VALUES('$villeDep','$villeArr','$place','$date','$idclient');";
$resultat = mysqli_query($connexion, $requete);

mysqli_close($connexion);



?>

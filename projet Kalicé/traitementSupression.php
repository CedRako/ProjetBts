<?php
include("bibliotheque.php");
$Idclient=$_POST["Idclient"];
$requete="DELETE FROM client Where Idclient='$Idclient'";
$connexion = connecter();
			
		$resultat = mysqli_query($connexion, $requete);
		mysqli_close($connexion);
?>
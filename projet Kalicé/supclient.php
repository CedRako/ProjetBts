<link href="projet.css" rel="stylesheet">
<?php

	include('bibliotheque.php');
	include("navbar.php");
	$requete="SELECT * FROM client";

	// connexion à la base de données
	$connexion = connecter();
		
	//Exécution de la requête
	$resultat = mysqli_query($connexion, $requete);
		
	//Fermeture de la bdd
	mysqli_close($connexion);
 
?>
<body>
<form method="post" action="traitementSupression.php">
 <label for="pays">Pseudo</label><br />
 <select name="Idclient">
<?php
// boucle permettant d’afficher toutes les valeurs obtenues par la requête
//dans une liste de choix
while ($ligne = mysqli_fetch_assoc($resultat))
{
?> 
<option value="<?php echo $ligne['Idclient']; ?>">
<?php echo $ligne['pseudo']; ?>
</option>
<?php
} ?>
</select>
<input type="submit" value="Supprimer le client">  
</form>
</body>
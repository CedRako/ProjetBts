<?php
include("bibliotheque.php");	

//fonction permettant de se connecter à la bdd

  
	// récupération des valeurs envoyées grâce à la méthode POST
    $idVille = $_POST['idVille'];
   	$nomVille = $_POST['nomVille'];
	$adresseVille= $_POST['adresseVille'];
	$prixVille=$_POST['prixVille'];
	
		 
	// requête d'ajout dans la base de données
	$requete = "INSERT INTO ville (idVille,nomVille,adresseVille, prixVille, imageVille)
                VALUES ('$idVille','$nomVille','$adresseVille','$prixVille', '10');";
				
	// connexion à la base de données
	$connexion = connecter();
		
	//Exécution de la requête
	$resultat = mysqli_query($connexion, $requete);
		
	//Fermeture de la bdd
	mysqli_close($connexion);
		

?>
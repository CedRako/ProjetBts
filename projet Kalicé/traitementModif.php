<?php
    include('bibliotheque.php');

    $Idclient = $_POST["Idclient"];
    $pseudo = $_POST['pseudo'];
	$mdp = $_POST['mdp'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$rue = $_POST['rue'];
	$ville = $_POST['ville'];
	$postal = $_POST['postal'];
    $mdph = password_hash($mdp , PASSWORD_DEFAULT) ;

    $requete = "UPDATE client SET pseudo ='$pseudo', mdp='$mdph', nom='$nom',prenom='$prenom',email='$email',rue='$rue',ville='$ville',postal='$postal'Where Idclient=$Idclient;";
			
	$connexion=connecter();
			
	$resultat = mysqli_query($connexion, $requete);

	mysqli_close($connexion);

?>
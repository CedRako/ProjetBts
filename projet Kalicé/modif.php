<html>
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Modification des données</title>
	</head>
	<body>
	<?php
		include('bibliotheque.php');
		include("navbar.php");
		$pseudo = $_SESSION['pseudo'];

		$requete = "SELECT * FROM client WHERE pseudo = '$pseudo'";
			
		$connexion = connecter();
			
		$resultat = mysqli_query($connexion, $requete);

		$ligne= mysqli_fetch_assoc($resultat);

		mysqli_close($connexion);
	?>
	
	<form action="traitementModif.php" method="post">
		<fieldset id="f2">
			<h3>Modifiez vos infos perso</h3>
			<hr>
			<input type="hidden" name="Idclient" size="25" maxlength="32" value="<?=$ligne['Idclient'];?>"/>
				<label>Pseudo:</label>
				<tr>
				<input type="text" name="pseudo" size="25" maxlength="32" value="<?=$ligne['pseudo'];?>"/>
				</tr>
				<br>
				<label>Mot de passe:</label>
				<tr>
				<input type="password" name="mdp" size="25" maxlength="32"/>
				</tr>
				<br>

				<label>Nom:</label>
				<tr>
				<input type="text" name="nom" size="25" maxlength="32" value="<?=$ligne['nom'];?>"/>
				</tr>
				<br>
				
				<label>Prénom:</label>
				<tr>
				<input type="text" name="prenom" size="25" maxlength="32" value="<?=$ligne['prenom'];?>"/>
				</tr>
				<br>

				<label>Courriel:</label>
				<tr>
				<input type="email" name="email" size="25" maxlength="32" value="<?=$ligne['email'];?>"/>
				</tr>
				<br>
				<label>Rue:</label>
				<tr>
				<input type="text" name="rue" size="25" maxlength="32" value="<?=$ligne['rue'];?>"/>
				</tr>
				<br>
				<label>Ville:</label>
				<tr>
				<input type="text" name="ville" size="25" maxlength="32" value="<?=$ligne['ville'];?>"/>
				</tr>
				<br>
				<label>Code Postal:</label>
				<tr>
				<input type="text" name="postal" size="25" maxlength="5" value="<?=$ligne['postal'];?>"/>
				</tr>
				<br>
				<tr>
				<input type="submit" name="valider" class="button" value="Modifier">
				</tr>

		</fieldset>
	</form>
	</body>
</html>
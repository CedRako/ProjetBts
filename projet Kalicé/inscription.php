<?php
	include("navbar.php");    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="projet.css">
	<title>Inscription</title>
</head>

<body>

<form action="traitement_inscrip.php" method="post">
	<fieldset id="f2">
		<h1>Inscrivez-vous</h1>
		<hr>

			<label>Pseudo:</label>
			<br>
			<input type="text" name="pseudo" size="25" maxlength="32">
			<br>

			<label>Mot de passe:</label>
			<br>
			<input type="password" name="mdp" size="25" maxlength="32">
			<br>

			<label>Nom:</label>
			<br>
			<input type="text" name="nom" size="25" maxlength="32"><br>

			<label>Prénom:</label>
			<br>
			<input type="text" name="prenom" size="25" maxlength="32">
			<br>

			<label>E-mail:</label>
			<br>
			<input type="email" name="email" size="25" maxlength="32">
			<br>

			
			<label>Téléphone</label>
			<br>
			<input type="text" name="tel" size="25" maxlength="32">
			<br>

			<label>Rue:</label>
			<br>
			<input type="text" name="rue" size="25" maxlength="32">
			<br>

			<label>Ville:</label>
			<br>
			<input type="text" name="ville" size="25" maxlength="32">
			<br>

			<label>Code Postal:</label>
			<br>
			<input type="text" name="postal" size="25" maxlength="5">
			<br><br>

			<input type="submit" class="button" value="S'inscrire" />
			<br>

	</fieldset>
</form>

</body>
</html>
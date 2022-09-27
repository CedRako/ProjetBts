<!DOCTYPE html>
<?php
    include("navbar.php");
?>
<html>
    <head>
        <link href="projet.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Authentification</title>
    </head>
	<body class="connexion">
        <form action="traitementConnexion.php" method="POST" >
            <b> Pseudo : </b> <input type="text" name="pseudo" >
            <b>Mot de passe:<b> <input type="text" name="mdp">
            <input type="submit" value="Connexion" >
            <a href="inscription.php">S'Inscrire</a>
        </form>
    </body>
</html>
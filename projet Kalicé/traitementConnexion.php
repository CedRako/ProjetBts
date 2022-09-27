<?php
    include("bibliotheque.php");
    session_start();
    
    if (empty($_POST["pseudo"])and empty($_POST["mdp"])){
        echo("Veuillez rentrer vos données dans le formulaire");
    }
    else{
    $pseudo = $_POST["pseudo"];
    $mdp =$_POST["mdp"];

	$requete = "SELECT pseudo, mdp FROM client WHERE pseudo = '$pseudo'";
			
		$connexion = connecter();
			
		$resultat = mysqli_query($connexion, $requete);

		$ligne= mysqli_fetch_assoc($resultat);

		mysqli_close($connexion);
    $mdph = $ligne["mdp"];

    if (password_verify($mdp, $mdph))
    {    
    ?>
    <?php
    $erreur = false;
    $_SESSION['pseudo'] = $pseudo;
    $connecter = true;
    header('location:acceuil.php');
    }
    else
    {
    ?><script>alert("Probleme dans la connexion")</script>;
    <?php
    $erreur = true;
    }
    if($pseudo=="admin"&&password_verify($mdp, $mdph)){
        header("location:afficheAdmin.php");
    }
    }



?>
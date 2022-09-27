<?php

include('bibliotheque.php');

 // Vérifier que tous les champs obligatoires sont remplis

if ( empty($_POST['pseudo'])
  || empty($_POST['mdp'])
  || empty($_POST['nom'])
  || empty($_POST['prenom'])
  || empty($_POST['email'])
  || empty($_POST['tel'])
  || empty($_POST['rue'])
  || empty($_POST['ville'])
  || empty($_POST['postal'])
  
  )
  // lien avec message qui renvoit au form
  {echo 'pmle';}
  
else
  {
    // Récupérer les valeurs du formulaire
    $pseudo = $_POST['pseudo'];
	  $mdp = $_POST['mdp'];
	  $nom = $_POST['nom'];
	  $prenom = $_POST['prenom'];
	  $email = $_POST['email'];
	  $rue = $_POST['rue'];
    $tel= $_POST['tel'];
	  $ville = $_POST['ville'];
	  $postal = $_POST['postal'];
        // Vérification que le client n'est pas déjà dans la base

        $connexion = connecter();
        $requete = "SELECT * FROM client WHERE pseudo = '$pseudo'";
        $resultat = mysqli_query($connexion, $requete);

        mysqli_close($connexion);

        if (mysqli_num_rows($resultat) != 0)
          {
            echo 'pb pseudo';
         }

        else
          {
            $mdph = password_hash($mdp , PASSWORD_DEFAULT) ;
  	// Ajouter le client dans la base
	      $requete = "INSERT INTO client (pseudo, mdp, nom, prenom, email, rue, ville, postal,tel)
				VALUES ('$pseudo','$mdph','$nom','$prenom','$email','$rue','$ville','$postal','$tel');";
      header('location:acceuil.php');
    $connexion=connecter();
    $resultat=mysqli_query($connexion, $requete);
	  mysqli_close($connexion);
			
    }
      }  
  ?>
<?php
function connecter()
  {
 // la variable $hôte est ici configurée pour un hébergement local (machine hôte)
    $hote       = 'localhost';
 // par défaut le nom d'utilisateur et le mdp sont respectivement 'root' et 'root'
    $utilisateur= 'root';
    $passe      = 'root';
	
    $base       = 'agencedevoyage';
    $connexion  = mysqli_connect($hote,$utilisateur,$passe,$base);
	
 // instruction qui permet de conserver les accents lors de la connexion au serveur de bases de données
    mysqli_query($connexion, 'SET NAMES UTF8');
    return $connexion;
  }
function en_euros($montant)
  {
    return number_format($montant, 2, ',', ' ').'&nbsp;€';
  }
?>
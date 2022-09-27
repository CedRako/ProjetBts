
<!DOCTYPE html>
<html lang="fr">
<head>
	<link href="projet.css" rel="stylesheet">
	<title>Ajoutez une destination</title>
<meta charset="utf-8">

<body>
	<?php
    include("navbar.php");
?>
<form action="traitementAjDestination.php" method="post">
  <fieldset>
    
	<b>Ajouter une nouvelle destination</b>
    <table>
		<tr>
			<td>
				Identifiant de la destination:
			</td>
			<td><input type="number" name="idVille"></td>
		</tr>
	  <tr>
        <td> nom de la Destination : </td>
        
		<td> <input name="nomVille" size="32" maxlength="12"> </td>
      
	  </tr>
      
	 
      
	 	  
	  <tr>
        <td> Pays de la destination : </td>
        
		<td> <input  name="adresseVille" size="32" maxlength="32"> </td>
      
	  </tr>
	  <tr>
        <td> Prix de la destination : </td>
        
		<td> <input  name="prixVille" size="32" maxlength="32"> </td>
      
	  </tr>   
	</table>
<input type="submit" value="Creer la destination">
  </fieldset>
  
</form>
</body>
<?php
    session_start();
?>
<html>
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="projet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
   </head>
    <body>
    <nav class="navbar navbar-dark bg-dark" style= width:100% style= height:100px;>
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="acceuil.php">Agence de voyage Kalicé</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="acceuil.php">Accueil</a></li>
                </ul>
                <a href="reservation.php">Réservation</a>
                <a href="Mentionlegale.php">Mentions Légales</a>
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if(isset($_SESSION["pseudo"])){?> 
                    <li><a href="compte.php"><span class="glyphicon glyphicon-user"></span> Mon compte</a></li>
                    <?php 
                    ;}
                    else{?> 
                    <li><a href="authentification.php">
                        <span class="glyphicon glyphicon-log-in">
                        </span> Authentification</a>
                    </li>
                    <?php
                        ;}
                    ?>
                </ul> 
            </div>
        </nav>
    </body>
</html>
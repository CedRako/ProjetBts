<?php 
  include("navbar.php");
?>
<!DOCTYPE html>
<html>
<head>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <link rel="stylesheet" href="projet.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <title>Réservation</title>
        <meta charset="UTF-8" />
</head>

<body>
<!----------------------------------------affichage d'une barre de naviguation------------------------------------------------------------------------------->

<!---------------------------------------affichage  d'un strombinoscope des différentes destinations ---------------------------------------------------------------------------------->
<div class="container-fluid"> 															

    <div class="row">
<!--------------------------- destination printemp/été ------------------------------------------------------------------->
<form action="traitementReservation.php" class="form" method="POST">
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="images/amsterdam.jpg" alt="" name="automne" class="img-fluid card-img-top">
          <div class="p-4">
            VilleDepart:<br>
          <input type="text" name="villeDep" value="Paris">
          <input name="villeArr" value="Amsterdam" readonly>
          <br>
          Veuillez entrer la date:<br>
          <input type="text" name="date">
            <p class="small text-muted mb-0">Partir à Amsterdam ! </p><br>
            <select name="place">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <input type="submit" class="text-dark" value="Reservez">
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">              
            </div>
          </div>
        </div>
      </div>
      </form>
<!------------------------------ destination printemp/été---------------------------------------------------------------->
<form action="traitementReservation.php" class="form" method="POST">
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="images/canion.jpg" alt="" name="automne" class="img-fluid card-img-top">
          <div class="p-4">
            VilleDepart:<br>
          <input type="text" name="villeDep" value="Paris">
          <input name="villeArr" value="roadTrip" readonly>
          <br>
          Veuillez entrer la date:<br>
          <input type="text" name="date">
            <p class="small text-muted mb-0">Partir en road Trip </p><br>
            <select name="place">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <input type="submit" class="text-dark" value="Reservez">
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">              
            </div>
          </div>
        </div>
      </div>
      </form>
      <!-- End -->
	  
<!------------------------------ destination printemp/été-------------------------------------------------------------------------->
<form action="traitementReservation.php" class="form" method="POST">
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="images/ibiza.jpeg" alt="" name="automne" class="img-fluid card-img-top">
          <div class="p-4">
            VilleDepart:<br>
          <input type="text" name="villeDep" value="Paris">
          <input name="villeArr" value="Ibiza" readonly>
          <br>
          Veuillez entrer la date:<br>
          <input type="text" name="date">
            <p class="small text-muted mb-0">Partir à Ibiza ! </p><br>
            <select name="place">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <input type="submit" class="text-dark" value="Reservez">
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">              
            </div>
          </div>
        </div>
      </div>
      </form>
      <!-- End -->

<!------------------------ - destination printemp/été------------------------------------------------------------------->
<form action="traitementReservation.php" class="form" method="POST">
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="images/japon.jpeg" alt="" name="automne" class="img-fluid card-img-top">
          <div class="p-4">
            VilleDepart:<br>
          <input type="text" name="villeDep" value="Paris">
          <input name="villeArr" value="Japon" readonly>
          <br>
          Veuillez entrer la date:<br>
          <input type="text" name="date">
            <p class="small text-muted mb-0">Partir au Japon ! </p><br>
            <select name="place">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <input type="submit" class="text-dark" value="Reservez">
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">              
            </div>
          </div>
        </div>
      </div>
      </form>

<!----------------------- destination autonme/hiver----------------------------------------------------------------->
<form action="traitementReservation.php" class="form" method="POST">
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="images/montagne.jpg" alt="" name="automne" class="img-fluid card-img-top">
          <div class="p-4">
            VilleDepart:<br>
          <input type="text" name="villeDep" value="Paris">
          <input name="villeArr" value="Montagne" readonly>
          <br>
          Veuillez entrer la date:<br>
          <input type="text" name="date">
            <p class="small text-muted mb-0">Partir à la Montagne ! </p><br>
            <select name="place">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <input type="submit" class="text-dark" value="Reservez">
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">              
            </div>
          </div>
        </div>
      </div>
      </form>
	  <!-- End -->
	  
<!-------------------------------- destination autonme/hiver-------------------------------------------------------------------------->
<form action="traitementReservation.php" class="form" method="POST">
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="images/egypte.jpeg" alt="" name="automne" class="img-fluid card-img-top">
          <div class="p-4">
            VilleDepart:<br>
          <input type="text" name="villeDep" value="Paris">
          <input name="villeArr" value="Egypte" readonly>
          <br>
          Veuillez entrer la date:<br>
          <input type="text" name="date">
            <p class="small text-muted mb-0">Partir en Egypte ! </p><br>
            <select name="place">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <input type="submit" class="text-dark" value="Reservez">
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">              
            </div>
          </div>
        </div>
      </div>
      </form>
<!-- End -->
	  
<!------------------------------------- destination autonme/hiver---------------------------------------------------------------------------->
<form action="traitementReservation.php" class="form" method="POST">
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="images/russie.jfif" alt="" name="automne" class="img-fluid card-img-top">
          <div class="p-4">
            VilleDepart:<br>
          <input type="text" name="villeDep" value="Paris">
          <input name="villeArr" value="Russie" readonly>
          <br>
          Veuillez entrer la date:<br>
          <input type="text" name="date">
            <p class="small text-muted mb-0">Partir en Russie ! </p><br>
            <select name="place">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <input type="submit" class="text-dark" value="Reservez">
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">              
            </div>
          </div>
        </div>
      </div>
      </form>
<!-- End -->
<!------------------------------------- destination autonme/hiver---------------------------------------------------------------------------->
<form action="traitementReservation.php" class="form" method="POST">
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="images/marrakech.jpeg" alt="" name="automne" class="img-fluid card-img-top">
          <div class="p-4">
            VilleDepart:<br>
          <input type="text" name="villeDep" value="Paris">
          <input name="villeArr" value="Marrakech" readonly>
          <br>
          Veuillez entrer la date:<br>
          <input type="text" name="date">
            <p class="small text-muted mb-0">Partir à Marrakech ! </p><br>
            <select name="place">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <input type="submit" class="text-dark" value="Reservez">
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">              
            </div>
          </div>
        </div>
      </div>
      </form>
<!-- End -->
  
<!---------------------affichage d'un bouton qui remet sur le haut de la page ------------------------------>		
		<center>
		<div class="py-5 text-right"><a href="#" class="btn btn-dark px-5 py-3 text-uppercase">J'en veux plus !</a></div>
		</center>
       

</div>	
</html>	
</html>
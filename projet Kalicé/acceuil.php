<?php 
include("bibliotheque.php");
include("navbar.php");
?>
<html>
    <head>
    <link href="projet.css" rel="stylesheet">
    <title>Acceuil</title>
    </head>
    <body>
        <h1><center> Reservez votre voyage en toute sécurité avec Kalicé</h1></center>
      
      <div class="row">
        <div class="col-12">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/Barcelone.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <div class="p-2 mb-3 m-5 center bg-white text-dark border" style="opacity:75%">
                  <h2><font face="arial">Espagne</font></h2>
                  <h3><font face="arial">Barcelone</font></h3>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/Djerba.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <div class="p-2 mb-3 m-5 center bg-white text-dark border" style="opacity:75%">
                  <h2><font face="arial">Tunisie</font></h2>
                  <h3><font face="arial">Djerba</font></h3>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/hongkong.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <div class="p-2 mb-3 m-5 center bg-white text-dark border" style="opacity:75%">
                  <h2><font face="arial">Chine</font></h2>
                  <h3 class="text-center"><span style="color: #000000;"><font face="arial"></font>Hong-Kong</span></h3>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
  
    </body>
</html>
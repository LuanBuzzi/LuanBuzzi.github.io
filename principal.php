<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/inicial.css">
  <title>Groove Street Parking</title>
  <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
</head>
<body>
  <?php include('header.php');?>
   <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
   <div class="carousel-indicators">
     <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
     <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
     <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
   </div>

   <div class="carousel-inner">
     <div class="carousel-item active c-item">
       <img src="images/background-principal.png" class="d-block w-100 c-img" alt="Slide 1">
       <div class="carousel-caption top-0 mt-4">
         <p class="mt-5 fs-25 text-uppercase titulo">Falou estacionamento?</p>
         <h1 class="display-1 fw-bolder text-capitalize fonte-cap">Falou GS PARK!</h1>
         <a href="estacione.php"> <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Estacione agora</button></a>
       </div>
     </div>
     <div class="carousel-item c-item">
       <img src="images/background-cadastro.png" class="d-block w-100 c-img" alt="Slide 2">
       <div class="carousel-caption top-0 mt-4">
         <p class="text-uppercase fs-25 mt-5 titulo">Conheça nossos planos</p>
         <p class="display-1 fw-bolder text-capitalize fonte-cap">mensalidade barata!</p>
        <a href="planos.php"> <button class="btn btn-primary px-4 py-2 fs-5 mt-5" data-bs-toggle="modal"
           data-bs-target="#booking-modal">Conhecer planos</button></a>
       </div>
     </div>
     <div class="carousel-item c-item">
       <img src="images/background-politica.png" class="d-block w-100 c-img" alt="Slide 3">
       <div class="carousel-caption top-0 mt-4">
         <p class="text-uppercase fs-25 mt-5 titulo">Conheça mais</p>
         <p class="display-1 fw-bolder text-capitalize fonte-cap">sobre a GS PARK!</p>
         <a href="sobre.php"><button class="btn btn-primary px-4 py-2 fs-5 mt-5" data-bs-toggle="modal"
           data-bs-target="#booking-modal">Sobre nós</button></a>
       </div>
     </div>
   </div>
   <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Previous</span>
   </button>
   <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Next</span>
   </button>
 </div>
 <br>
 <h1 class='titulo'>Estamos presentes nos principais pontos de Los Santos!</h1>

 <div class='map-container'>
 <img src="images/mapa.png" usemap="#image-map" >
<map name="image-map">
    <area target="_blank" alt="Estacionamento LS Airport" title="Estacionamento LS Airport" href="lsairport.php" coords="587,548,553,505,541,465,541,432,555,413,577,405,600,405,624,414,631,429,638,451,627,491,609,525" shape="poly">
    <area target="_blank" alt="Estacionamento Pier de Santa Mônica" title="Estacionamento Pier de Santa Mônica" href="piersm.php" coords="181,391,202,358,216,336,226,302,224,272,211,254,178,243,159,249,140,262,133,278,133,297,140,327,150,353,167,374" shape="poly">
    <area target="_blank" alt="Estacionamento oficial Los Santos Forum" title="Estacionamento oficial Los Santos Forum" href="lsforum.php" coords="1068,346,1045,325,1018,271,1022,232,1035,215,1057,206,1080,208,1106,220,1113,239,1116,264,1106,294,1094,317,1069,347" shape="poly">
    <footer>
    <div class="container footer">
        <div class="contact-info">
            <span><i class="fas fa-phone"></i> Telefone:</span>
            <span><i class="fas fa-envelope"></i> +5547988942577</span>
        </div>
        <div class="contact-info">
            <span><i class="fas fa-phone"></i> Email:</span>
            <span><i class="fas fa-envelope"></i> groovestreetparking@park.com</span>
        </div>
    </div>
</footer>
</map>
</div>
</body>
</html>
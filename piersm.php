<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GSP - Pier de Santa Mônica</title>
  <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/piersm.css">
</head>
<body>
<?php include('header.php'); ?>
<br>
<div id="carouselExampleIndicators" class="carousel slide" style="max-width: 600px; margin: auto;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/piersm.png" class="d-block w-100 c-img" style="height: 300px; object-fit: cover;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/piersm2.png" class="d-block w-100 c-img" style="height: 300px; object-fit: cover;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/piersm3.png" class="d-block w-100 c-img" style="height: 300px; object-fit: cover;" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container">
    <div class="parking-info">
        <div class="parking-description">
            <h2 class="titulo">Descrição</h2>
            <p class="subtitulo">O Estacionamento Pier de Santa Mônica oferece uma solução de estacionamento conveniente para visitantes do famoso pier. Localizado estrategicamente nas proximidades, proporcionamos fácil acesso para todos que desejam aproveitar as atrações e a beleza do pier.</p>
        </div>
    </div>

    <div class="parking-info">
        <div class="parking-description">
            <h2 class="titulo">Capacidade</h2>
            <p class="subtitulo">Com uma capacidade de 150 vagas, nosso estacionamento oferece um amplo espaço para garantir acomodação a todos os clientes.</p>
        </div>
    </div>

    <div class="parking-info">
        <div class="parking-description">
            <h2 class="titulo">Horários de Funcionamento</h2>
            <p class="subtitulo">Aberto todos os dias, das 8h às 22h. Oferecemos serviços contínuos para atender às suas necessidades de estacionamento.</p>
        </div>
    </div>

    <div class="parking-info">
        <div class="parking-description">
            <h2 class="titulo">Serviços Adicionais</h2>
            <p class="subtitulo">Além de estacionamento seguro, oferecemos serviços de manobrista, lavagem de carros e opções de pagamento online para maior comodidade.</p>
        </div>
    </div>
</div>

</body>
</html>
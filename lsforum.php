<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GSP - Los Santos Forum</title>
  <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/lsforum.css">
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
      <img src="images/lsforum.png" class="d-block w-100 c-img" style="height: 300px; object-fit: cover;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/lsforum2.png" class="d-block w-100 c-img" style="height: 300px; object-fit: cover;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/lsforum3.png" class="d-block w-100 c-img" style="height: 300px; object-fit: cover;" alt="...">
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
            <p class="subtitulo">Bem-vindo ao Estacionamento Los Santos Forum, o local ideal para estacionar enquanto participa das atividades e eventos no fórum. Estamos estrategicamente localizados nas proximidades do Los Santos Forum, proporcionando fácil acesso a todos os participantes. Nosso estacionamento visa facilitar a sua visita ao fórum, oferecendo uma solução de estacionamento conveniente.</p>
        </div>
    </div>

    <div class="parking-info">
        <div class="parking-description">
            <h2 class="titulo">Capacidade</h2>
            <p class="subtitulo">O estacionamento possui uma capacidade de 100 vagas, oferecendo um amplo espaço para clientes.</p>
        </div>
    </div>

    <div class="parking-info">
        <div class="parking-description">
            <h2 class="titulo">Horários de Funcionamento</h2>
            <p class="subtitulo">Aberto de segunda a sábado, das 6 manhã até às 18 da noite. Oferecemos serviços contínuos para atender às suas necessidades de estacionamento.</p>
        </div>
    </div>

    <div class="parking-info">
        <div class="parking-description">
            <h2 class="titulo">Serviços Adicionais</h2>
            <p class="subtitulo">Além do estacionamento seguro, oferecemos serviços de lava-rápido, manobrista e opções de pagamento online.</p>
        </div>
    </div>
</div>

</body>
</html>
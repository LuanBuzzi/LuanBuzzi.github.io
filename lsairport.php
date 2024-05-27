<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSP - Los Santos Airport</title>
    <link rel="stylesheet" href="css/lsairport.css">
</head>
<body>
    <?php include('header.php'); ?>
<br>
<div id="carouselExampleIndicators" class="carousel slide" style="max-width: 600px; max-height: 600px; margin: auto;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/lsairport.png" class="d-block w-100 c-img" style="height: 300px; object-fit: cover;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/lsaiport-noite.png" class="d-block w-100 c-img" style="height: 300px; object-fit: cover;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/lsairport-visaogeral.png" class="d-block w-100 c-img" style="height: 300px; object-fit: cover;" alt="...">
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
            <p class="subtitulo">O Los Santos Airport Estacionamento é uma escolha premium para quem procura comodidade e segurança para estacionar em Los Santos. Localizado nas proximidades do movimentado Aeroporto Internacional de Los Santos, nosso estacionamento oferece uma gama de serviços e comodidades para atender às necessidades dos clientes mais exigentes.</p>
        </div>
    </div>

    <div class="parking-info">
        <div class="parking-description">
            <h2 class="titulo">Capacidade</h2>
            <p class="subtitulo">O estacionamento possui uma capacidade de 500 vagas, oferecendo um amplo espaço para clientes.</p>
        </div>
    </div>

    <div class="parking-info">
        <div class="parking-description">
            <h2 class="titulo">Horários de Funcionamento</h2>
            <p class="subtitulo">Aberto de segunda a domingo, 24 horas por dia. Oferecemos serviços contínuos para atender às suas necessidades de estacionamento.</p>
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

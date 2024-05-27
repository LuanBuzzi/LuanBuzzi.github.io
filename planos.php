<!DOCTYPE html>
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Verifique se o formulário foi enviado
  $plano_selecionado = '';
  if(isset($_POST['plano']))
  $plano_selecionado = $_POST['plano'];

      // Atribua o valor correspondente ao plano selecionado
      if ($plano_selecionado == 'Mensalidade Básica') {
          $valor_selecionado = '299,99'; 
      } elseif ($plano_selecionado == 'Mensalidade Plus') {
          $valor_selecionado = '450,00'; 
      } elseif ($plano_selecionado == 'Mensalidade VIP') {
          $valor_selecionado = '699,99'; 
      }

      // Armazenar na sessão
      $_SESSION['plano_selecionado'] = $plano_selecionado;
      $_SESSION['valor_selecionado'] = $valor_selecionado;

      // Redirecionar para a página de checkout
      header("Location: checkout.php");
      exit();
  }

?>  
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GSP - Planos</title>
  <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/planos.css">
  <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .custom-card {
            margin-bottom: 20px;
        }

        .reservar-btn {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<?php include('header.php'); ?>

<!-- Card 1 -->

<div class="container-fluid">
<div class="row justify-content-between mt-5 ms-3 me-3">
    <div class="card transparent-bg custom-card col-3">
        <img src="images/plano1img.png" class="card-img-top" alt="Imagem de 3 Estrelas">
        <div class="card-body">
          <h5 class="card-title">Plano Básico</h5>
        </div>
        <ul class="list-group list-group-flush">
        <li class="list-group-item transparent-bg col">Sem taxa adicional para reservas antecipadas.</li>
        <li class="list-group-item transparent-bg col">Acesso a promoções sazonais.</li>
        <li class="list-group-item transparent-bg col">Uma lavação gratuita por mês.</li>
        <li class="list-group-item transparent-bg col">Mensalidade para estacionamentos.</li>
        <li class="list-group-item transparent-bg col">R$299,99</li>
        </ul>
        <div class="card-body">
          <form action="" method="post">
            <?php if (isset($_SESSION['logado']) && $_SESSION['logado'] === true): ?>
              <input type="submit" class="reservar-btn" value='Adquirir Mensalidade'>
              <input type="hidden" name="plano" value="Mensalidade Básica">
            <?php else: ?>
              <a href="login.php" class="reservar-btn">Adquirir Mensalidade</a>
            <?php endif; ?>
          </form>
        </div>
      </div>
      

    <!-- Card 2 -->
    <div class="card transparent-bg custom-card col-3">
      <img src="images/plano2img.png" class="card-img-top" alt="Imagem de 4 Estrelas">
      <div class="card-body">
        <h5 class="card-title">Plano Plus</h5>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item transparent-bg">Estacionamento flexível durante horários de pico.</li>
        <li class="list-group-item transparent-bg">Reservas garantidas.</li>
        <li class="list-group-item transparent-bg">Acesso a descontos em parceiros.</li>
        <li class="list-group-item transparent-bg">Mensalidade para estacionamentos.</li>
        <li class="list-group-item transparent-bg">R$450,00</li>
      </ul>
      <div class="card-body">
      <form action="" method="post">
      <?php if (isset($_SESSION['logado']) && $_SESSION['logado'] === true): ?>
        <input type="submit" class="reservar-btn" value='Adquirir Mensalidade'></input>
        <input type="hidden" name="plano" value="Mensalidade Plus">
        <?php else: ?>
          <a href="login.php" class="reservar-btn">Adquirir Mensalidade</a>
        <?php endif; ?>
        </form>
      </div>
    </div>


    <!-- Card 3 -->
    <div class="card transparent-bg custom-card col-3">
      <img src="images/plano3img.png" class="card-img-top" alt="Imagem de 5 Estrelas">
      <div class="card-body">
        <h5 class="card-title">Plano VIP</h5>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item transparent-bg">Reservas VIP.</li>
        <li class="list-group-item transparent-bg">Estacionamento prioritário em qualquer horário.</li>
        <li class="list-group-item transparent-bg">Serviço de manobrista gratuito.</li>
        <li class="list-group-item transparent-bg">Mensalidade para estacionamentos.</li>
        <li class="list-group-item transparent-bg">R$699,99</li>
      </ul>
      <div class="card-body">
      <form action="" method="post">
      <?php if (isset($_SESSION['logado']) && $_SESSION['logado'] === true): ?>
        <input type="submit" class="reservar-btn" value='Adquirir Mensalidade'></input>
        <input type="hidden" name="plano" value="Mensalidade VIP">
        <?php else: ?>
          <a href="login.php" class="reservar-btn">Adquirir Mensalidade</a>
        <?php endif; ?>
        </form>
      </div>
    </div>
    </div>
    </div>
</body>
</html>
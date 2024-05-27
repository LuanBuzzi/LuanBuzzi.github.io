<!DOCTYPE html>
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifique se o formulário foi enviado
    $estacionamento_selecionado = '';
    if(isset($_POST['plano']))
    $estacionamento_selecionado = $_POST['plano'];
  
        // Atribua o valor correspondente ao plano selecionado
        if ($estacionamento_selecionado == 'Estacionamento Los Santos Airport') {
            $valorpark_selecionado = '185,00'; 
        } elseif ($estacionamento_selecionado == 'Estacionamento oficial Los Santos Forum') {
            $valorpark_selecionado = '285,00'; 
        } elseif ($estacionamento_selecionado == 'Estacionamento Pier de Santa Mônica') {
            $valorpark_selecionado = '400,00'; 
        }
  
        // Armazenar na sessão
        $_SESSION['estacionamento_selecionado'] = $estacionamento_selecionado;
        $_SESSION['valorpark_selecionado'] = $valorpark_selecionado;
  
        // Redirecionar para a página de checkout
        header("Location: checkoutpark.php");
        exit();
    }
  
  ?>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
      <link rel="stylesheet" href="css/estacione.css">
  </head>
  <body>
  <?php include('header.php'); ?>
  <h3 class='titulo'>Economize tempo e dinheiro ao viajar/trabalhar!</h3>

  <div class="container-fluid">
  <div class="row justify-content-between mt-5 ms-3 me-3">
  
      <!-- Card 1 -->
    <div class="card transparent-bg custom-card col-3">
          <img src="images/lsforum.png" class="card-img-top img-fluid" alt="Foto do Pier de Santa Mônica">
          <div class="card-body">
              <p class="card-text">Estacionamento oficial</p>
              <p class="card-text">Los Santos Forum</p>
              <?php if (isset($_SESSION['logado']) && $_SESSION['logado'] === true): ?>
                <form action="" method="post">
          <a href="reservalsforum.php"><button class="reservar-btn">Estacione</button></a>
          <input type="hidden" name="plano" value="Estacionamento oficial Los Santos Forum">
        <?php else: ?>
          <a href="login.php" class="reservar-btn">Logue para estacionar</a>
        <?php endif; ?>
          </form>
          </div>
      </div>
      
      <!-- Card 2 -->
    <div class="card transparent-bg custom-card col-3 ">
          <img src="images/lsairport.png" class="card-img-top img-fluid" alt="Foto do Estacionamento de Los Santos Airport">
          <div class="card-body">
              <p class="card-text">Estacionamento</p>
              <p class="card-text">Los Santos Airport</p>
              <form action="" method="post">
              <?php if (isset($_SESSION['logado']) && $_SESSION['logado'] === true): ?>
          <a href="reservalsairport.php"><button class="reservar-btn">Estacione</button></a>
          <input type="hidden" name="plano" value="Estacionamento Los Santos Airport">
        <?php else: ?>
          <a href="login.php" class="reservar-btn">Logue para estacionar</a>
        <?php endif; ?>
        </form>
      </div>
      </div>

      <!-- Card 3 -->
    <div class="card transparent-bg custom-card col-3">
          <img src="images/piersm.png" class="card-img-top img-fluid" alt="Foto do Pier de Santa Mônica ">
          <div class="card-body">
              <p class="card-text">Estacionamento</p>
              <p class="card-text">Pier de Santa Maria</p>
              <form action="" method="post">
              <?php if (isset($_SESSION['logado']) && $_SESSION['logado'] === true): ?>
          <a href="reservapiersm.php"><button class="reservar-btn">Estacione</button></a>
          <input type="hidden" name="plano" value="Estacionamento Pier de Santa Mônica">
        <?php else: ?>
          <a href="login.php" class="reservar-btn">Logue para estacionar</a>
        <?php endif; ?>
        </form>
          </div>
      </div>
  </div>
  </div>
  </body>
  </html>

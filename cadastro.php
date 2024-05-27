<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groove Street Parking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <script src="js/script.js"></script>
</head>
<body>
  <div class="container">
  <h1 class="titulo">Cadastro</h1>
  <br>
  <h2 class="email">E-mail</h2>
  <form action="" method="post" class="form">
    <div class="emailbox">
        <input type="email" name="inputemail" id="inputemail" placeholder="Digite seu e-mail aqui" required>
    </div>
    <br>
    <h2 class="senha">Senha</h2>
    <div class="passwordbox">
        <input type="password" name="inputpassword" id="inputpassword" placeholder="Digite sua senha aqui" required>
    </div>
    <br>
    <h2 class="senha2">Confirme a sua senha</h2>
    <div class="passwordbox2">
        <input type="password" name="inputpassword2" id="inputpassword2" placeholder="Confirme sua senha" required>
    </div>
    <br>
    <div class="check">
        <input type="checkbox"  name="pp" id="pp" class="pp" required><span class="conta">
     <h1 style="color: white; display: inline;">Eu li e concordo com a</h1>
     <a href="politica.php" target="_blank"><h1 id="link" style="display: inline"> política de privacidade</h1></a>
     </span>
    </div>
     <br><br>
     <div class="submitbox">
     <input type="submit" name="inputsubmit" id="inputsubmit" onclick="return cadastro()"></input>
    </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
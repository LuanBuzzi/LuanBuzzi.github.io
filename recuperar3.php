<!DOCTYPE html>
<?php
  session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groove Street Parking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/recuperar3.css">
    <script src="js/script.js"></script>
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
</head>
<body>


  <div class="container">
  <h1 class="titulo">Recuperação de Senha</h1>
  <br>
  <form action="" method="post" class="form">
    <br>
    <h2 class="senha">Nova senha:</h2>
    <div class="passwordbox">
        <input type="password" name="inputpassword" id="inputpassword" placeholder="Digite sua nova senha aqui">
    </div>
    <h2 class="senha2">Confirme sua nova senha:</h2>
    <div class="passwordbox">
        <input type="password" name="inputpassword2" id="inputpassword2" placeholder="Confirme sua nova senha aqui">
    <br>
     <br><br>
     <div class="submitbox">
        <input type="button" name="inputsubmit" id="inputsubmit" value="Alterar senha" onclick="redirect4()">
    </div>
    </form>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
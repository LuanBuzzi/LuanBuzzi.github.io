<?php
session_start();

$email = '';
if(isset($_POST['emailrec']))
$email = $_POST['emailrec'];

$_SESSION['email_rec1'] = $email;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groove Street Parking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/recuperar1.css">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <script src="js/script.js"></script>
</head>
<body>
  <div class="container">
  <h1 class="titulo">Recuperação de Senha</h1>
  <br>
  <div class="agradecimento" style="font-size: 5em;">
  <h2 id="tamanho">Para dar inicio a recuperação de sua conta, insira o email pertencente a ela:</h2>
  </div>
  <br>
  <h2 class="email">E-mail</h2>
  <form action="recuperar2.php" method="get" class="form" id="recuperarForm">
    <div class="emailbox">
        <input type="text" name="emailrec" id="emailrec" placeholder="Digite seu e-mail aqui" required>
    </div>
    <br>
     <br><br>
     <div class="submitbox">
     <input type="submit" name="inputsubmit" id="inputsubmit" onclick='' value="Enviar"></input>
    </div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
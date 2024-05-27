<?php
session_start();

include('functions.php');

$validado = false;

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = 0;
    if(isset($_POST["inputemail"]))
    $email = $_POST["inputemail"];

    $senha = 0;
    if(isset($_POST["inputpassword"]))
    $senha = $_POST["inputpassword"];

    if (admins($email, $senha)) {
        $_SESSION['logado'] = true;
        $_SESSION['email'] = $email; // Adicione esta linha
        $_SESSION['senha'] = $senha; // Adicione esta linha
        header('Location: principal.php');
        exit();
    } elseif (verify($email, $senha)) {
        $_SESSION['logado'] = true;
        $_SESSION['email'] = $email; // Adicione esta linha
        $_SESSION['senha'] = $senha; // Adicione esta linha
        header('Location: principal.php');
        exit();
    } else {
        $erro = 'Credenciais inválidas. Tente novamente.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groove Street Parking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/script.js"></script>
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
</head>
<body>


  <div class="container">
  <h1 class="titulo">Login</h1>
  <br>
  <h2 class="email">E-mail</h2>
  <form action="" method="post" class="form">
    <div class="emailbox">
        <input type="email" name="inputemail" id="inputemail" placeholder="Digite seu e-mail aqui">
    </div>
    <br>
    <h2 class="senha">Senha</h2>
    <div class="passwordbox">
        <input type="password" name="inputpassword" id="inputpassword" placeholder="Digite sua senha aqui">
    </div>
    <br>
    <div class="check">
        <input type="checkbox" name="manter" id="manter" class="manter"><p class="manter">  Manter-se logado?</p>
    </div>
    <span class="conta">
     <h1 style="color: white; display: inline;">Não tem uma conta? </h1>
     <a href="cadastro.php"><h1 id="link" style="display: inline"> Cadastre-se já!</h1></a>
     </span>
     <br>
     <a href="recuperar1.php"><h1 class="esqueci">Esqueci a senha</h1></a>
     <br><br>
     <div class="submitbox">
        <input type="submit" name="inputsubmit" id="inputsubmit" value="Logar" onclick="verify(); admins();">
    </div>
    </form>

  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
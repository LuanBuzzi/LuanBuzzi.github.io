<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
include('functions.php');

// Verificar se o usuário está logado
if (!isset($_SESSION['logado']) || !$_SESSION['logado']) {
    // Se não estiver logado, redirecione para a página de login
    header('Location: login.php');
    exit();
}

// Verificar se o usuário é um administrador
$email = $_SESSION['email'];
$senha = $_SESSION['senha'];
if (!admins($email, $senha)) {
    header('Location: principal.php');
    exit();
}
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSP - Painel de Admin</title>
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
<header>
<body>
<?php
include('adminheader.php');
?>

  <section>
        <div class="parking-lot">
            <a href="adminlsairport.php"><img src="images/lsairport-visaogeral.png" style="height: 300px; object-fit: cover;" alt="Estacionamento 1"></a>
            <h2 class='titulo'>Los Santos Airport</h2>
            <p class='ocupado'>Vagas ocupadas: 380</p>
            <p class='disp'>Vagas disponíveis: 120</p>
            <p>Capacidade total: 500</p>
        </div>

        <div class="parking-lot">
        <a href="adminlsforum.php"><img src="images/lsforum.png" style="height: 300px; object-fit: cover;" alt="Estacionamento 2"></a>
            <h2 class='titulo'>Los Santos Forum</h2>
            <p class='ocupado'>Vagas ocupadas: 75</p>
            <p class='disp'>Vagas disponíveis: 25</p>
            <p>Capacidade total: 100</p>
        </div>

        <div class="parking-lot">
        <a href="adminpiersm.php"><img src="images/piersm.png" style="height: 300px; object-fit: cover;" alt="Estacionamento 3"></a>
            <h2 class='titulo'>Pier Santa Mônica</h2>
            <p class='ocupado'>Vagas ocupadas: 120</p>
            <p class='disp'>Vagas disponíveis: 30</p>
            <p>Capacidade total: 150</p>
        </div>
    </section>

</body>
</html>
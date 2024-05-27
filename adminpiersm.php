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
    <link rel="stylesheet" href="css/adminpiersm.css">
</head>
<body>
<header>
<body>
<?php
include('adminheader.php');
?>
<div class="container">
    <div class="parking-info">
        <div class="parking-description">
            <h2 class="titulo">Detalhes</h2>
            <p class="subtitulo">Clima: Ensolarado   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-brightness-high-fill" viewBox="0 0 16 16">
  <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
</svg></p>
<p class="subtitulo">Evento próximo: Não</p>
        </div>
    </div>

    <div class="parking-info">
        <div class="parking-description">
            <h2 class="titulo">Estatísticas</h2>
            <p class="subtitulo">Vagas ocupadas: 120</p>
            <p class="subtitulo">Vagas disponíveis: 30</p>
            <p class="subtitulo">Capacidade total: 150</p>
            <p class="subtitulo">Ocupação: 80%</p>
        </div>
    </div>

    <div class="parking-info">
        <div class="parking-description">
            <h2 class="titulo">Funcionários trabalhando na unidade</h2>
            <p class="subtitulo">Maiara - Atendente</p>
            <p class="subtitulo">Amilton - Manobrista</p>
            <p class="subtitulo">Jacson - Limpador</p>
        </div>
    </div>

    <div class="parking-info">
        <div class="parking-description">
            <h2 class="titulo">Registro de entrada e saída</h2>
            <table>
    <thead>
        <tr>
        <th>Data</th>
        <th>Tipo de registro</th>
        <th>Placa</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>05/12/2023 9:34</td>
            <td>Entrada</td>
            <td>ABC1234</td>
        </tr>
        <tr>
            <td>05/12/2023 9:30</td>
            <td>Saída</td>
            <td>MCD3921</td>
        </tr>
        <tr>
            <td>05/12/2023 9:22</td>
            <td>Entrada</td>
            <td>MDC1243</td>
        </tr>
        <tr>
            <td>05/12/2023 8:55</td>
            <td>Entrada</td>
            <td>NCD1245</td>
        </tr>
        <tr>
            <td>05/12/2023 8:30</td>
            <td>Saída</td>
            <td>MXS1923</td>
        </tr>
        <tr>
            <td>05/12/2023 8:21</td>
            <td>Entrada</td>
            <td>SMS2393</td>
        </tr>
        <tr>
            <td>05/12/2023 8:13</td>
            <td>Saída</td>
            <td>MAS2222</td>
        </tr>
        <tr>
            <td>05/12/2023 8:05</td>
            <td>Entrada</td>
            <td>OLK1915</td>
        </tr>
        <tr>
            <td>05/12/2023 7:55</td>
            <td>Entrada</td>
            <td>BEL0511</td>
        </tr>
    </tbody>
</table>
        </div>
    </div>
</div>
</body>
</html>
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
            <p class="subtitulo">Clima: Nublado   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cloud-fill" viewBox="0 0 16 16">
  <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
</svg></p>
<p class="subtitulo">Evento próximo: Não</p>
        </div>
    </div>

    <div class="parking-info">
        <div class="parking-description">
            <h2 class="titulo">Estatísticas</h2>
            <p class="subtitulo">Vagas ocupadas: 380</p>
            <p class="subtitulo">Vagas disponíveis: 120</p>
            <p class="subtitulo">Capacidade total: 500</p>
            <p class="subtitulo">Ocupação: 76%</p>
        </div>
    </div>

    <div class="parking-info">
        <div class="parking-description">
            <h2 class="titulo">Funcionários trabalhando na unidade</h2>
            <p class="subtitulo">Erick Pulgar - Atendente</p>
            <p class="subtitulo">Everton Ribeiro - Atendente</p>
            <p class="subtitulo">Cebolinha - Manobrista</p>
            <p class="subtitulo">Tite - Limpador</p>
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
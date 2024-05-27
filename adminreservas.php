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
    <link rel="stylesheet" href="css/adminreservas.css">
</head>
<body>
<header>
<body>
<?php
include('adminheader.php');
?>
<h1 class='titulo'>Relatório Financeiro de Reservas</h1>
<table>
    <thead>
        <tr>
        <th>Unidade</th>
        <th>Data de entrada</th>
        <th>Data de saída</th>
        <th>Motivo</th>
        <th>Placa veículo</th>
        <th>Email</th>
        <th>Método de Pagamento</th>
        <th>Preço</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Los Santos Airport</td>
            <td>04/12/2023 9:00</td>
            <td>05/12/2023 18:30</td>
            <td>Trabalho</td>
            <td>ABC1234</td>
            <td>usuario1@email.com</td>
            <td>Cartão de Crédito</td>
            <td>R$ 40,00</td>
        </tr>
        <tr>
        <td>Los Santos Forum</td>
            <td>04/12/2023 9:00</td>
            <td>08/12/2023 18:30</td>
            <td>Outro</td>
            <td>JKL4932</td>
            <td>usuario2@email.com</td>
            <td>PIX</td>
            <td>R$ 60,00</td>
        </tr>
        <tr>
            <td>Pier de Santa Mônica</td>
            <td>04/12/2023 8:00</td>
            <td>04/12/2023 19:00</td>
            <td>Viagem</td>
            <td>MCD1293</td>
            <td>usuario3@email.com</td>
            <td>Boleto Bancário</td>
            <td>R$ 15,00</td>
        </tr>
        <tr>
            <td>Pier de Santa Mônica</td>
            <td>04/12/2023 9:20</td>
            <td>05/12/2023 17:00</td>
            <td>Viagem</td>
            <td>CDM2016</td>
            <td>usuario4@email.com</td>
            <td>PIX</td>
            <td>R$ 15,00</td>
        </tr>
        <tr>
            <td>Los Santos Airport</td>
            <td>04/12/2023 9:00</td>
            <td>10/12/2023 18:30</td>
            <td>Viagem</td>
            <td>XKQ9873</td>
            <td>usuario5@email.com</td>
            <td>Cartão de Crédito</td>
            <td>R$ 120,00</td>
        </tr>
        <tr>
            <td>Los Santos Forum</td>
            <td>04/12/2023 6:30</td>
            <td>04/12/2023 17:30</td>
            <td>Trabalho</td>
            <td>LME1981</td>
            <td>usuario6@email.com</td>
            <td>PIX</td>
            <td>R$ 20,00</td>
        </tr>
        <tr>
            <td>Los Santos Airport</td>
            <td>04/12/2023 9:00</td>
            <td>04/01/2024 18:30</td>
            <td>Trabalho</td>
            <td>CRF2013</td>
            <td>usuario7@email.com</td>
            <td>Cartão de Crédito</td>
            <td>R$ 600,00</td>
        </tr>
        <tr>
            <td>Pier de Santa Mônica</td>
            <td>03/12/2023 6:30</td>
            <td>03/12/2023 18:30</td>
            <td>Compras</td>
            <td>FEE2922</td>
            <td>usuario1@email.com</td>
            <td>Cartão de Crédito</td>
            <td>R$ 20,00</td>
        </tr>
        <tr>
            <td>Los Santos Airport</td>
            <td>04/12/2023 9:00</td>
            <td>05/12/2023 18:30</td>
            <td>Trabalho</td>
            <td>TUD0201</td>
            <td>usuario8@email.com</td>
            <td>Boleto Bancário</td>
            <td>R$ 40,00</td>
        </tr>
    </tbody>
</table>
</body>
</html>
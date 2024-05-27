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
    <link rel="stylesheet" href="css/adminmensalidade.css">
</head>
<body>
<header>
<body>
<?php
include('adminheader.php');
?>
<h1 class='titulo'>Relatório Financeiro de Mensalidades</h1>
<table>
    <thead>
        <tr>
        <th>Data</th>
        <th>Email</th>
        <th>Método de Pagamento</th>
        <th>Tipo da Mensalidade</th>
        <th>Preço</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>05/12/2023</td>
            <td>usuario1@email.com</td>
            <td>Cartão de Crédito</td>
            <td>Mensalidade Básica</td>
            <td>R$ 299,99</td>
        </tr>
        <tr>
        <td>05/12/2023</td>
            <td>usuario2@email.com</td>
            <td>PIX</td>
            <td>Mensalidade Plus</td>
            <td>R$ 450,00</td>
        </tr>
        <tr>
            <td>04/12/2023</td>
            <td>usuario3@email.com</td>
            <td>Boleto</td>
            <td>Mensalidade VIP</td>
            <td>R$ 699,99</td>
        </tr>
        <tr>
        <td>04/12/2023</td>
            <td>usuario4@email.com</td>
            <td>Cartão de Crédito</td>
            <td>Mensalidade Básica</td>
            <td>R$ 299,99</td>
        </tr>
        <tr>
        <td>04/12/2023</td>
            <td>usuario5@email.com</td>
            <td>PIX</td>
            <td>Mensalidade Plus</td>
            <td>R$ 450,00</td>
        </tr>
        <tr>
            <td>03/12/2023</td>
            <td>usuario6@email.com</td>
            <td>Boleto</td>
            <td>Mensalidade VIP</td>
            <td>R$ 699,99</td>
        </tr>
        <tr>
        <td>02/12/2023</td>
            <td>usuario7@email.com</td>
            <td>Cartão de Crédito</td>
            <td>Mensalidade Básica</td>
            <td>R$ 299,99</td>
        </tr>
        <tr>
        <td>02/12/2023</td>
            <td>usuario8@email.com</td>
            <td>PIX</td>
            <td>Mensalidade Plus</td>
            <td>R$ 450,00</td>
        </tr>
        <tr>
            <td>01/12/2023</td>
            <td>usuario9@email.com</td>
            <td>Boleto</td>
            <td>Mensalidade VIP</td>
            <td>R$ 699,99</td>
        </tr>
    </tbody>
</table>
</body>
</html>
<!DOCTYPE html>
<?php
$entrada = 0;
if(isset($_POST['entrada']))
$entrada = $_POST['entrada'];

$saida = 0;
if(isset($_POST['saida']))
$saida = $_POST['saida'];

$horaentrada = 0;
if(isset($_POST['horaentrada']))
$horaentrada = $_POST['horaentrada'];

$horasaida = 0;
if(isset($_POST['horasaida']))
$horasaida = $_POST['horasaida'];

$diaria = 20; // preço por dia em reais

if ($entrada > 0 && $saida > 0) {
    $duracao_em_horas = ($saida - $entrada) / 3600; // convertendo para horas
    $preco_total = ceil($duracao_em_horas / 24) * $diaria; // arredondando para cima o número de diárias necessárias
    $preco_diaria = $diaria / 24; // preço por hora

    echo "Hora de entrada: " . date('Y-m-d H:i:s') . "<br>";
    echo "Hora de saída: " . date('Y-m-d H:i:s') . "<br>";
    echo "Total a pagar: R$ " . number_format($preco_total - ($preco_diaria * date('H')), 2, ',', '.');
}
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown Hover</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-uVfXpBEhB6QgrRrjY2gGh02ksD41rS1NE6cDcpHu2xzltfC5C5Tpj2t01zIRdI8L" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        .dropdown-hover:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="#">Logo</a>
        <div class="navbar-nav">
            <li class="nav-item dropdown dropdown-hover">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Item 1</a>
                    <a class="dropdown-item" href="#">Item 2</a>
                    <a class="dropdown-item" href="#">Item 3</a>
                </div>
            </li>
        </div>
    </div>
</nav>
<BR><BR></BR></BR>
<form action="" method="post">
    <label for="dataentrada">Data de entrada: </label>
    <input type="date" name='entrada'>
    <label for="dataentrada">Hora de entrada: </label>
    <input type="time" name='horaentrada'>
    <br>
    <label for="datasaida">Data de saída: </label>
    <input type="date" name='saida'>
    <label for="datasaida">Hora de saída: </label>
    <input type="time" name='datasaida'>
    <br>
    <input type="submit" value='Calcular'>
</form>
<?php
    echo "Hora de entrada: $entrada<br>Hora de saída: $saida";
?>

</body>
</html>

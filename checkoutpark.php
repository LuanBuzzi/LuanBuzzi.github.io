<?php
    session_start();

   include('functions.php');

   if (isset($_SESSION['estacionamento_selecionado']) && isset($_SESSION['valor_selecionado'])) {
       $estacionamento_selecionado = $_SESSION['estacionamento_selecionado'];
       $valor_selecionado = $_SESSION['valor_selecionado'];
   } else {
       header("Location: estacione.php");
       exit();
   }

   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       // Obtenha os valores do formulário
       $placa = '';
       if(isset($_POST['placa']))
       $placa = $_POST['placa'];

       $motivo = '';
       if(isset($_POST['motivo']))
       $motivo = $_POST['motivo'];

       $data_entrada = '';
       if(isset($_POST['data_entrada']))
       $data_entrada = $_POST['data_entrada'];

       $data_saida = '';
       if(isset($_POST['data_saida']))
       $data_saida = $_POST['data_saida'];

       $hora_entrada = '';
       if(isset($_POST['hora_entrada']))
       $hora_entrada = $_POST['hora_entrada'];

       $hora_saida = '';
       if(isset($_POST['hora_saida']))
       $hora_saida = $_POST['hora_saida'];
       // Diária do aeroporto (ajuste o valor conforme necessário)
       $diariaAeroporto = 20.00;

       // Chame a função para calcular o preço total
       $precoTotal = calcularPreco($dataEntrada, $horaEntrada, $dataSaida, $horaSaida, $diariaAeroporto);

       // Salve os valores em sessão para a próxima página
       $_SESSION['placa'] = $placa;
       $_SESSION['motivo'] = $motivo;
       $_SESSION['dataEntrada'] = $dataEntrada;
       $_SESSION['horaEntrada'] = $horaEntrada;
       $_SESSION['dataSaida'] = $dataSaida;
       $_SESSION['horaSaida'] = $horaSaida;
       $_SESSION['precoTotal'] = $precoTotal;

       // Redirecione para a próxima página
       header("Location: checkoutpark2.php");
       exit();
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Estacionamento</title>
    <link rel="stylesheet" href="css/checkout.css">
    <script src="js/script.js"></script>
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
</head>
<body>

    <header>
        <a href="principal.php" style="text-decoration: none; color: white;"><h1>Checkout - Estacionamento</h1></a>
    </header>

    <div class="container">
        <form action="#" method="post" id="formInformacoes">
            <span>
            <p class='info'>Plano de Estacionamento: </p>
            <p class='planoselecionado'><?php echo $estacionamento_selecionado;?></p>
            </span>
            <br>
            <span>
            <span id="preco-estimado">
    <p class='info'>Preço Estimado: R$ <span id="preco-estimado-valor"><?php echo isset($precoTotal) ? number_format($precoTotal, 2) : '0.00'; ?></span></p>
            </span>

            </span>
            
            <hr>

            <!-- Informações Pessoais -->
            <label class="info">Informações pessoais</label>

            <label for="placa">Placa do Carro:</label>
            <input type="text" id="placa" name="placa" placeholder='Exemplo: ABC1234' required>

            <label for="motivo">Motivo do Estacionamento:</label>
            <select id="motivo" name="motivo" required>
                <option value="trabalho">Trabalho</option>
                <option value="trabalho">Viagem</option>
                <option value="compras">Compras</option>
                <option value="outros">Outros</option>
            </select>

            <label for="data_entrada">Data de Entrada:</label>
            <input type="date" id="data_entrada" name="data_entrada" required>

            <label for="hora_entrada">Horário de Entrada:</label>
            <input type="time" id="hora_entrada" name="hora_entrada" required>

            <label for="data_saida">Data de Saída:</label>
            <input type="date" id="data_saida" name="data_saida" required>

            <label for="hora_saida">Horário de Saída:</label>
            <input type="time" id="hora_saida" name="hora_saida" required>
            <hr>
            <a href="" style='text-allign: center'><button type="button" onclick="calcularCusto()">Ir para a Etapa 2</button></a>
</form>
<h2 id="resultado"></h2>
    </div>
</body>
</html>

<?php
    session_start();

        // Verifica se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

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


        include('functions.php');

         if (isset($_SESSION['estacionamento_selecionado']) && isset($_SESSION['valor_selecionado'])) {
        $estacionamento_selecionado = $_SESSION['estacionamento_selecionado'];
        $valor_selecionado = $_SESSION['valor_selecionado'];
    } else {
        header("Location: estacione.php");
        exit();
    }
            
    
            // Diária do aeroporto (ajuste o valor conforme necessário)
            $diariaAeroporto = 20.00;
    
            // Chama a função para calcular o preço total, se todas as variáveis estiverem definidas
            if ($placa && $motivo && $dataEntrada && $horaEntrada && $dataSaida && $horaSaida) {
                $precoTotal = calcularPreco($dataEntrada, $horaEntrada, $dataSaida, $horaSaida, $diariaAeroporto);
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Preço e Método de Pagamento</title>
    <link rel="stylesheet" href="css/checkout.css">
    <script src="js/script.js"></script>
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
</head>
<body>

    <header>
    <a href="principal.php" style="text-decoration: none; color: white;"><h1>Checkout - Estacionamento</h1></a>
    </header>

    <div class="container">
        <p class='info'>Placa do Carro: <?php echo $placa; ?></p>
        <p class='info'>Motivo: <?php echo $motivo; ?></p>
        <p class='info'>Data de Entrada: <?php echo $dataEntrada; ?></p>
        <p class='info'>Hora de Entrada: <?php echo $horaEntrada; ?></p>
        <p class='info'>Data de Saída: <?php echo $dataSaida; ?></p>
        <p class='info'>Hora de Saída: <?php echo $horaSaida; ?></p>
        <p class='info'>Preço Estimado: R$ <?php echo number_format($precoTotal, 2); ?></p>

        <!-- Adicione opções para escolher o método de pagamento -->

            <!-- Método de Pagamento -->
            <label class='metodo'>Método de Pagamento</label>

            <input type="radio" name="paymentMethod" value="cc" id="ccRadio" onchange="mostrarCC(), esconderPIX(), esconderBOLETO();" checked>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-fill" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1"/>
</svg> Cartão de Crédito

            <input type="radio" name="paymentMethod" value="pix" id="pixRadio" onchange="esconderCC(), mostrarPIX(), esconderBOLETO();">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alipay" viewBox="0 0 16 16">
  <path d="M2.541 0H13.5a2.551 2.551 0 0 1 2.54 2.563v8.297c-.006 0-.531-.046-2.978-.813-.412-.14-.916-.327-1.479-.536-.303-.113-.624-.232-.957-.353a12.98 12.98 0 0 0 1.325-3.373H8.822V4.649h3.831v-.634h-3.83V2.121H7.26c-.274 0-.274.273-.274.273v1.621H3.11v.634h3.875v1.136h-3.2v.634H9.99c-.227.789-.532 1.53-.894 2.202-2.013-.67-4.161-1.212-5.51-.878-.864.214-1.42.597-1.746.998-1.499 1.84-.424 4.633 2.741 4.633 1.872 0 3.675-1.053 5.072-2.787 2.08 1.008 6.37 2.738 6.387 2.745v.105A2.551 2.551 0 0 1 13.5 16H2.541A2.552 2.552 0 0 1 0 13.437V2.563A2.552 2.552 0 0 1 2.541 0"/>
  <path d="M2.309 9.27c-1.22 1.073-.49 3.034 1.978 3.034 1.434 0 2.868-.925 3.994-2.406-1.602-.789-2.959-1.353-4.425-1.207-.397.04-1.14.217-1.547.58Z"/>
</svg> PIX

            <input type="radio" name="paymentMethod" value="boleto" id="boletoRadio" onchange="esconderCC(), esconderPIX(), mostrarBOLETO();">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
  <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6zm-2.5 0v7h-1.25V6zm-2.5 0v7h-1.25V6zm-2.5 0v7h-1.25V6zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2M.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1z"/>
</svg> Boleto Bancário

            <!-- Campos do Cartão de Crédito -->
            <div class="card-fieldsCC" id="cardFieldsCC">
                <hr>
                <label for="titular">Nome do titular:</label>
                <input type="text" id="titular" name="titular" required>

                <label for="numero_cartao">Número do Cartão:</label>
                <input type="text" id="numero_cartao" name="numero_cartao" required>

                <label for="data_expiracao">Data de Expiração:</label>
                <input type="text" id="data_expiracao" name="data_expiracao" required>

                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>

            <!-- Campos do PIX -->
            <div class="card-fieldsPIX" id="cardFieldsPIX">
                <hr>
                <h1 class='pix'>Chave PIX: groovestreet@gmail.com</h1>
            </div>

            <!-- Campos do Boleto Bancário -->
            <div class="card-fieldsBOLETO" id="cardFieldsBOLETO">
                <hr>
                <a href="gerar_boleto.php" download="boleto_estacionamento.pdf"><button type="button">Gerar Boleto</button></a>
            </div>
            <hr>

            <button type="submit">Finalizar Compra</button>
        </form>

</body>
</html>

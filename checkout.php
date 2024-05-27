<?php
    session_start();

    if (isset($_SESSION['plano_selecionado']) && isset($_SESSION['valor_selecionado'])) {
        $plano_selecionado = $_SESSION['plano_selecionado'];
        $valor_selecionado = $_SESSION['valor_selecionado'];
    } else {
        header("Location: planos.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="css/checkout.css">
    <script src="js/script.js"></script>
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
</head>
<body>

    <header>
    <a href="principal.php" style="text-decoration: none; color: white;"><h1>Checkout - Planos</h1></a>
    </header>

    <div class="container">
        <form action="#" method="post" id="checkoutForm">
            <span style='display: inline';><p class='info'>Serviço: </p>
        <p class="planoselecionado"><?php echo $plano_selecionado ?></p></span>
        <br>
        <span>
        <p class='info'>Valor: R$</p>
        <p class='valor'><?php echo $valor_selecionado; ?></p>
        </span>
        
            <hr>
            <label class="info">Informações pessoais</label>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" placeholder='Exemplo: Big Smoke' required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder='Exemplo: bigsmokegta@gta.com' required>

            <label for="address">CPF:</label>
            <input type="text" id="address" name="address" placeholder='Exemplo: 123.456.789-00' required>

            <label for="address">CEP:</label>
            <input type="text" id="address" name="address" placeholder='Exemplo: 89180-000' required>

            <label for="address">Endereço:</label>
            <input type="text" id="address" name="address" placeholder='Exemplo: Groove Street, 666'required>

            <label for="address">Endereço:</label>
            <input type="text" id="address" name="address" placeholder='Exemplo: Casa, em frente a padaria.'>
            <hr>
            <label class='metodo'>Método de Pagamento</label>

            <input type="radio" name="paymentMethod" value="cc" id="ccRadio" onchange="mostrarCC(), esconderPIX(), esconderBOLETO();" checked> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card-2-back" viewBox="0 0 16 16">
  <path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5z"/>
  <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1m-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1"/>
</svg> Cartão de Crédito
            <input type="radio" name="paymentMethod" value="pix" id="pixRadio" onchange="esconderCC(), mostrarPIX(), esconderBOLETO();"><i class="bi bi-alipay"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alipay" viewBox="0 0 16 16">
  <path d="M2.541 0H13.5a2.551 2.551 0 0 1 2.54 2.563v8.297c-.006 0-.531-.046-2.978-.813-.412-.14-.916-.327-1.479-.536-.303-.113-.624-.232-.957-.353a12.98 12.98 0 0 0 1.325-3.373H8.822V4.649h3.831v-.634h-3.83V2.121H7.26c-.274 0-.274.273-.274.273v1.621H3.11v.634h3.875v1.136h-3.2v.634H9.99c-.227.789-.532 1.53-.894 2.202-2.013-.67-4.161-1.212-5.51-.878-.864.214-1.42.597-1.746.998-1.499 1.84-.424 4.633 2.741 4.633 1.872 0 3.675-1.053 5.072-2.787 2.08 1.008 6.37 2.738 6.387 2.745v.105A2.551 2.551 0 0 1 13.5 16H2.541A2.552 2.552 0 0 1 0 13.437V2.563A2.552 2.552 0 0 1 2.541 0"/>
  <path d="M2.309 9.27c-1.22 1.073-.49 3.034 1.978 3.034 1.434 0 2.868-.925 3.994-2.406-1.602-.789-2.959-1.353-4.425-1.207-.397.04-1.14.217-1.547.58Z"/>
</svg></i>  PIX
            <input type="radio" name="paymentMethod" value="boleto" id="boletoRadio" onchange="esconderCC(), esconderPIX(), mostrarBOLETO();"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
  <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6zm-2.5 0v7h-1.25V6zm-2.5 0v7h-1.25V6zm-2.5 0v7h-1.25V6zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2M.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1z"/>
</svg> Boleto Bancário

            <div class="card-fieldsCC" id="cardFieldsCC">
                <hr>
                <label for="cardNumber">Nome do titular:</label>
                <input type="text" id="cardNumber" name="cardNumber">

                <label for="cardNumber">Número do Cartão:</label>
                <input type="text" id="cardNumber" name="cardNumber">

                <label for="expirationDate">Data de Expiração:</label>
                <input type="text" id="expirationDate" name="expirationDate">

                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv">
            </div>

            <div class="card-fieldsPIX" id="cardFieldsPIX">
                <hr>
                <h1 class='pix'>Chave pix: groovestreet@gmail.com</h1>
            </div>

            <div class="card-fieldsBOLETO" id="cardFieldsBOLETO">
                <hr>
                <a href="images/boleto.png" download="boletogs.png"><button type="button">Gerar boleto</button></a>
            </div>
            <hr>
            <button type="submit">Finalizar Compra</button>
        </form>
    </div>
  
</body>
</html>

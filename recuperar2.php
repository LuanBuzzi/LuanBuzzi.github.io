<?php
session_start();

include('functions.php');

if (isset($_SESSION['email_rec1'])) {
    // Acesse a variável de sessão
    $emailrec = $_SESSION['email_rec1'];
} else {
}
var_dump($emailrec);

$codigo1 = isset($_POST['codigo1']) ? $_POST['codigo1'] : '';
$codigo2 = isset($_POST['codigo2']) ? $_POST['codigo2'] : '';
$codigo3 = isset($_POST['codigo3']) ? $_POST['codigo3'] : '';
$codigo4 = isset($_POST['codigo4']) ? $_POST['codigo4'] : '';
$codigo5 = isset($_POST['codigo5']) ? $_POST['codigo5'] : '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["inputsubmit"])) {
        recuperar($codigo1, $codigo2, $codigo3, $codigo4, $codigo5);
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
    <link rel="stylesheet" href="css/recuperar2.css">
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <script src="js/script.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="titulo">Recuperação de Senha</h1>
        <br>
        <div class="agradecimento" style="font-size: 3rem;">
                <h2 id="tamanho">Insira o código de 5 dígitos que foi enviado para seu email <?php echo $emailrec ?></h2>

        </div>
        <br>
        <form action="" method="post" class="form">
            <div class="codigo">
                <input type="number" name="codigo1" id="codigo1" required>
                <input type="number" name="codigo2" id="codigo2" required>
                <input type="number" name="codigo3" id="codigo3" required>
                <input type="number" name="codigo4" id="codigo4" required>
                <input type="number" name="codigo5" id="codigo5" required>
            </div>
            <div class="submitbox">
                <input type="submit" name="inputsubmit" id="inputsubmit" value="Enviar">>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>

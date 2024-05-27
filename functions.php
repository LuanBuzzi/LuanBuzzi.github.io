<?php

$pagina = basename($_SERVER['PHP_SELF']);

function admins($email, $senha){
    $admin = [
        ['email' => 'admin@admin.com', 'senha' => 'admin'],
    ];

    for ($i = 0; $i < count($admin); $i++) {
        $usuario = $admin[$i];
        if ($usuario['email'] === $email && $usuario['senha'] === $senha) {
            return true;
        }
    }
    
    return false;
}
function verify($email, $senha) {
    $usuarios = [
        ['email' => 'usuario1@example.com', 'senha' => 'senha123'],
        ['email' => 'usuario2@example.com', 'senha' => 'outrasenha'],
        ['email' => 'luan321@gmail.com', 'senha' => '123'],
    ];

    for ($i = 0; $i < count($usuarios); $i++) {
        $usuario = $usuarios[$i];
        if ($usuario['email'] === $email && $usuario['senha'] === $senha) {
            return true;
        }
    }

    return false;
}

function recuperar($codigo1, $codigo2, $codigo3, $codigo4, $codigo5){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["inputsubmit"])) {

            $codigo1 = 0;
            if(isset($_POST['codigo1']))
            $codigo1 = $_POST['codigo1'];

            $codigo2 = 0;
            if(isset($_POST['codigo2']))
            $codigo2 = $_POST['codigo2'];

            $codigo3 = 0;
            if(isset($_POST['codigo3']))
            $codigo3 = $_POST['codigo3'];
           
            $codigo4 = 0;
            if(isset($_POST['codigo4']))
            $codigo4 = $_POST['codigo4'];

            $codigo5 = 0;
            if(isset($_POST['codigo5']))
            $codigo5 = $_POST['codigo5'];

            if ($codigo1 == '1' && $codigo2 == '2' && $codigo3 == '3' && $codigo4 == '4' && $codigo5 == '5') {
                header('Location: recuperar3.php');
                exit();
            }
        }
    }
}

?>


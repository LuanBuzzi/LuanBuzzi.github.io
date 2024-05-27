<?php
session_start();
$paginaAnterior = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
// Destruir a sessão
session_destroy();

// Redirecionar para a página de login (ou qualquer outra página desejada após o logout)
if($paginaAnterior == 'index.php'){
    header("Location: login.php");
}
else{
header("Location: $paginaAnterior");
}

exit();
?>
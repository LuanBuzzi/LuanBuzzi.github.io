    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <?php
    include('functions.php');
    ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Header</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/header.css">
        <script src="js/script.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-brand" href="principal.php">
                <img src="images/Logo2.png" alt="Logo GSP" id="logo">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mba-lg-0 mx-auto"> <!-- mx-auto para centralizar os textos da navbar -->
                    <li class="nav-item">
                        <a class="nav-link <?php if ($pagina == 'principal.php') { echo 'active'; } ?> menu-item fonte-nav clickable-item" href="principal.php">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($pagina == 'estacione.php') { echo 'active'; } ?> menu-item fonte-nav clickable-item" href="estacione.php">Estacione</a>
                    </li>
                    <li class="nav-item dropdown dropdown-hover">
                        <a class="nav-link dropdown-toggle fonte-nav" href="estacione.php" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Estacionamentos
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item <?php if ($pagina == 'lsforum.php') { echo 'active'; } ?>" href="lsforum.php">Los Santos Forum</a>
                            <a class="dropdown-item <?php if ($pagina == 'lsairport.php') { echo 'active'; } ?>" href="lsairport.php">Los Santos Airport</a>
                            <a class="dropdown-item <?php if ($pagina == 'piersm.php') { echo 'active'; } ?>" href="piersm.php">Pier de Santa Maria</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($pagina == 'planos.php') { echo 'active'; } ?> menu-item fonte-nav clickable-item" href="planos.php">Planos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($pagina == 'sobre.php') { echo 'active'; } ?> menu-item fonte-nav clickable-item" href="sobre.php">Sobre nós</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle icon" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle icon" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?php
                    if (!isset($_SESSION['logado']) || !$_SESSION['logado']) {
                        // Exibir a opção "Cadastre-se" apenas se o usuário não estiver logado
                        echo '<a class="dropdown-item" href="login.php"><i class="fas fa-sign-in-alt"></i> Logar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="cadastro.php"><i class="fas fa-user-plus"></i> Cadastre-se</a>';
                    } else {
                        echo '<a class="dropdown-item" href="perfil.php"><i class="fas fa-user"></i> Perfil</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Preferências</a>';
                        if (admins($_SESSION['email'], $_SESSION['senha'])) {
                            echo '<a class="dropdown-item" href="admin.php"><i class="fas fa-cogs"></i> Painel de Admin</a>';
                        }
                        echo '<div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Sair</a>';
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>

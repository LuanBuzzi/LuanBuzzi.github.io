<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSP - Painel de Admin</title>
    <link rel="shortcut icon" href="images/logo.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/adminheader.css">
</head>
<body>
<header>
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
                        <a class="nav-link <?php if ($pagina == 'admin.php') { echo 'active'; } ?> menu-item fonte-nav clickable-item" href="admin.php">Visão geral</a>
                    </li>
                    
                    <li class="nav-item dropdown dropdown-hover">
                        <a class="nav-link dropdown-toggle fonte-nav" href="estacione.php" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Estacionamentos
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item <?php if ($pagina == 'adminlsforum.php') { echo 'active'; } ?>" href="adminlsforum.php">Los Santos Forum</a>
                            <a class="dropdown-item <?php if ($pagina == 'adminlsairport.php') { echo 'active'; } ?>" href="adminlsairport.php">Los Santos Airport</a>
                            <a class="dropdown-item <?php if ($pagina == 'adminpiersm.php') { echo 'active'; } ?>" href="adminpiersm.php">Pier de Santa Maria</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-hover">
                        <a class="nav-link dropdown-toggle fonte-nav" href="estacione.php" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Relatório Financeiro
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item <?php if ($pagina == 'adminmensalidade.php') { echo 'active'; } ?>" href="adminmensalidade.php">Mensalidades</a>
                            <a class="dropdown-item <?php if ($pagina == 'adminreservas.php') { echo 'active'; } ?>" href="adminreservas.php">Reservas</a>
                        </div>
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
                        echo '<a class="dropdown-item" href="principal.php"><i class="fas fa-user"></i>Sair do painel de admin</a>
                        <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i>Sair</a>';
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </header>
</body>
</html>
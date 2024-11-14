<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>OrgaNote</title>
  <link rel="stylesheet" href="../style/style2.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" style="color: #5E617F; font-size: 20px; font-weight: 500;"
          href="../index.php">OrgaNote</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Funcionalidades
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Temas</a></li>
                <li><a class="dropdown-item" href="#">Contagem de Notas</a></li>
              </ul>
            </li>
          </ul>
          <div class="col text-end">
            <?php
            session_start();
            if (isset($_SESSION['login'])) {
              $login = $_SESSION['login'];
              $nome = $_SESSION['nome'];
              $nivel = $_SESSION['nivel'];

              echo "Bem vindo, $nome | ";
              if ($nivel == 'adm') {
                echo "<a href='../adm/adm.php'> Admin </a> | ";
              }
              echo "<a href='logout.php'> Logout </a>";
            } else {
              echo "
                        <a href='adm/login.php'> LOGIN </a> |
                        <a href='../usuarios/usuarios.php'> Não Possuo Cadastro </a>
                    ";
            }
            ?>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div class="container mt-5 mb-5">
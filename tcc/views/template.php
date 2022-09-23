<?php
  if (!isset($_SESSION)) {
    session_start();
  }
  if (isset($_SESSION['id_usuario'])) {
    $id_usuario = $_SESSION['id_usuario'];
    $model = new Usuario();
    $usuarioLogado = $model->getById($id_usuario);
  } else {
    $usuarioLogado['email'] = "Não Logado";
    $usuarioLogado['id'] = 0;
    if ($arquivo != "views/login.php" &&
        $arquivo != "views/index.php" &&
        $arquivo != "views/cadastro.php") {
      header("location: ".APP."login/login");
      exit(0);
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

    <title>Routine.You</title>
  </head>
  <style>
    .navbar-brand{
      align-items: center;
      font-family: 'Quicksand', sans-serif;
      font-size: 30px;
      text-decoration: none;
      font-weight: bold;
      padding-left: 240px;
    }
    .nav-link{
      font-size: 22px;
      color: white;
      font-family: 'Quicksand', sans-serif;
    }
    body{
      background-color: #D6F2F4;
      padding-bottom: 2rem;
    }
    @media only screen and (max-width: 1200px) {
      .navbar-brand{
        align-items: center;
        font-family: 'Quicksand', sans-serif;
        font-size: 28px;
        text-decoration: none;
        font-weight: bold;
        padding-left: 150px;
      }
      .nav-link{
        font-size: 20px;
        color: white;
        font-family: 'Quicksand', sans-serif;
      }
      body{
        background-color: #D6F2F4;
        padding-bottom: 2rem;
      }
    }
    @media only screen and (max-width: 800px) {
      .navbar-brand{
        align-items: center;
        font-family: 'Quicksand', sans-serif;
        font-size: 28px;
        text-decoration: none;
        font-weight: bold;
        padding-left: 150px;
      }
      .nav-link{
        font-size: 20px;
        color: white;
        font-family: 'Quicksand', sans-serif;
      }
      body{
        background-color: #D6F2F4;
        padding-bottom: 2rem;
      }
    }
    @media only screen and (max-width: 600px) {
      .navbar-brand{
        align-items: center;
        font-family: 'Quicksand', sans-serif;
        font-size: 20px;
        text-decoration: none;
        font-weight: bold;
        padding-left: 10px;
      }
      .nav-link{
        font-size: 10px;
        color: white;
        font-family: 'Quicksand', sans-serif;
      }
      body{
        background-color: #D6F2F4;
        padding-bottom: 2rem;
      }
    }
    @media only screen and (max-width: 400px) {
      .navbar-brand{
        align-items: center;
        font-family: 'Quicksand', sans-serif;
        font-size: 18px;
        text-decoration: none;
        font-weight: bold;
        padding-left: 10px;
      }
      .nav-link{
        font-size: 10px;
        color: white;
        font-family: 'Quicksand', sans-serif;
      }
      body{
        background-color: #D6F2F4;
        padding-bottom: 2rem;
      }
    }
  </style>

  <body>
    <nav class="navbar navbar-expand-md navbar-light" style="background-color: #080D32;">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="<?php echo APP."index/index";?>" style="color:white">
          <img src="<?php echo APP. "imagens/logomenu.png";?>" width="30" class="d-inline-block align-text-top">
          ROUTINE.YOU
        </a>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
             <li class="nav-item">
               <a class="nav-link" style="color: white" href="<?php echo APP."login/login";?>">Login</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" style="color: white" href="<?php echo APP."cadastro/novoUser";?>">Cadastro</a>
             </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
        <?php
          if (isset($arquivo)) {
            require_once $arquivo;
          }
         ?>
    </div>

    <header class="text-center text-white fixed-bottom" style="background-color: #080D32;">
      Giulia Gonçalves e Karine Kayano - 228
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>

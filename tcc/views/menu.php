<?php
  // include_once "mvc/index.php";
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

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  </head>

  <style>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css");

    body {
      background-color: #D6F2F4;
      margin-left: 50px; /* Same as the width of the sidenav */
      padding: 0px 10px;
    }

    #logout{
      color: red;
    }


    .sidebar a {
      padding: 20px 17px 20px 17px;
      text-decoration: none;
      color: #39D497;
      display: block;
      transition: 0.3s;
    }

    .sidebar a:hover {
      color: white;
    }

    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }

    .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }
    .sidebar {
      height: 100%;
      width: 50px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #080D32;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 20px;
    }


  </style>

  <body>
    <div class="sidebar">
        <a href="<?php echo APP."rotina/listar";?>"><i class="bi bi-calendar-check"></i></a>
        <a href="<?php echo APP."materia/listar";?>"><i class="bi bi-journal-bookmark"></i></a>
        <a href="<?php echo APP."atividade/listar";?>"><i class="bi bi-list-check"></i></a>
        <a href="<?php echo APP."ideias/index";?>"><i class="bi bi-lightbulb"></i></a>
        <a id="logout" href="<?php echo APP."login/logout";?>"><i class="bi bi-x-circle"></i></a>
    </div>

    <div class="container-fluid">
        <?php
          if (isset($arquivo)) {
            require_once $arquivo;
          }
         ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>

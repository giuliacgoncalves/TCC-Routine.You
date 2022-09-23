<?php
 abstract class Controller {
   protected $templateOff = "template";
   protected $templateOn = "menu";

   public function view($visao, $dados) {
     extract($dados);
     $arquivo = "views/$visao.php";

     if (!isset($_SESSION)) {
       session_start();
     }
     if (isset($_SESSION['id_usuario'])) {
       $id_usuario = $_SESSION['id_usuario'];
       $model = new Usuario();
       $usuarioLogado = $model->getById($id_usuario);
       require_once "views/$this->templateOn.php";
     } else {
       $usuarioLogado['email'] = "Não Logado";
       $usuarioLogado['id'] = 0;
       require_once "views/$this->templateOff.php";
       if ($arquivo != "views/login.php" &&
           $arquivo != "views/index.php" &&
           $arquivo != "views/cadastro.php") {
         header("location: ".APP."login/login");
         exit(0);
       }
     }
   }

   public function redirect($visao) {
     header('location: '.APP.$visao);
   }
 }
?>

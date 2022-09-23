<?php
  class LoginController extends Controller {
    public function login() {
      $dados = array();
      if (!isset($_COOKIE['erro'])) {
        setcookie('email');
      }
      $this->view("login", $dados);
    }

    public function logar() {
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        $model = new Usuario();
        $usuario = $model->getByEmail($email);
        if ($usuario == null) {
          setcookie("erro", "Email não encontrado, tente novamente !!!");
          setcookie("email", $email);
          $this->redirect("login/login");
        } else {
            if (($senha) != $usuario['senha'] ) {
              setcookie("erro", "Senha incorreta, tente novamente !!!");
              setcookie("email", $email);
              $this->redirect("login/login");
            } else {
              setcookie("erro");
              if (!isset($_SESSION)) {
                session_start();
              }
              $_SESSION['id_usuario'] = $usuario['id'];
              $this->redirect("rotina/listar?mensagem=Usuário logado com sucesso!");
            }
        }
    }

    public function logout() {
      if (!isset($_SESSION)) {
        session_start();
      }
      session_destroy();
      $this->redirect("index/index?mensagem=Usuário deslogado com sucesso!");
    }
  }
 ?>

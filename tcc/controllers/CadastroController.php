<?php
  class CadastroController extends Controller {

 public function novoUser() {
   // unset ($_COOKIE['erro']);
  $usuario = array();
  $usuario['id'] = 0;
  $usuario['email'] = '';
  $usuario['senha'] = '';
  $dados = array();
  $dados['usuario'] = $usuario;
  $this->view("cadastro", $dados);
 }

 public function salvar() {
   unset ($_COOKIE['erro']);
   $usuario = array();
   $usuario['id'] = $_POST['id'];
   $userEmail = $_POST['email'];
   $usuario['email'] = $_POST['email'];
   if(!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
     setcookie("erro", "Email inválido");
     $this->redirect("cadastro/novoUser");
     return;
   }
   $plainPassword = $_POST['senha'];
   if(strlen($plainPassword) < 6) {
     setcookie("erro", "Senha inválida");
     $this->redirect("cadastro/novoUser");
     return;
   }
   $usuario['senha'] = md5($plainPassword);
   $model = new Usuario();
   if(isset($_POST['email'])){
     $user = $model->getByEmail($_POST['email']);
     #Se o retorno for maior do que zero, diz que já existe um.
     // var_dump ($usuario);
     // die();
     if($user!=null){
         // echo "Ja existe um usuário cadastrado com este email";
         setcookie("erro", "Email já existe!");
         $this->redirect("cadastro/novoUser");
         return;
      }
      // else {
   //       echo json_encode(array('email' => 'Usuário válido.'));
   // }
    }
   if ($usuario['id']==0) {
     $model->create($usuario);
   }
   setcookie("erro", "Cadastro Salvo");
   $this->redirect("login/login");
   unset ($_COOKIE['erro']);
  }
}
 ?>

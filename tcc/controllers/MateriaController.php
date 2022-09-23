<?php
  class MateriaController extends Controller {
    public function listar() {
      $model = new Materia();
      $materias = $model->read();
      if (!isset($_SESSION)) {
        session_start();
      }
      $materias = $model->getByUserM($_SESSION['id_usuario']);
      $dados = array();
      $dados['materias'] = $materias;
      $this->view("listagemMateria", $dados);
    }

    public function novo() {
      $materia = array();
      $materia['id'] = 0;
      $materia['nome'] = "";
      $dados = array();
      $dados['materia'] = $materia;
      $this->view("formularioMateria", $dados);
    }

    public function editar($id) {
      $model = new Materia();
      $materia = $model->getById($id);
      $dados = array();
      $dados['materia'] = $materia;
      $this->view("formularioMateria", $dados);
    }

    public function excluir($id) {
      $model = new Materia();
      $materia = $model->getById($id);
      $model->delete($id);
      $this->redirect("materia/listar?mensagem=Matéria excluída com sucesso!");
      exit();
    }

    public function salvar() {
      $materia = array();
      $materia['id'] = $_POST['id'];

      $materia['nome'] = trim($_POST['nome']);
      if (!isset($_SESSION)) {
        session_start();
      }

      if(substr_count($_POST['nome'], " ") == strlen($_POST['nome'])){
          $this->redirect("materia/novo?erro=Necessário preencher todos os campo!");
      }
      else {
        $materia['user_id'] = $_SESSION['id_usuario'];
        $model = new Materia();
        if ($materia['id']==0) {
          $model->create($materia);
          $this->redirect("materia/listar?mensagem=Matéria cadastrada com sucesso!");
        } else {
          $model->update($materia);
          $this->redirect("materia/listar?mensagem=Matéria editada com sucesso!");
        }
      }
    }
  }
 ?>

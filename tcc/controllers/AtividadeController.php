<?php
  class AtividadeController extends Controller {
    public function listar() {
      $model = new Atividade();
      if (!isset($_SESSION)) {
        session_start();
      }
      $atividades = $model->getByUser($_SESSION['id_usuario']);
      $dados = array();
      $dados['atividades'] = $atividades;
      $this->view("listagemAtividade", $dados);
    }

    public function novo() {
      $atividade = array();
      $atividade['id'] = 0;
      $atividade['titulo'] = "";
      $atividade['data'] = "";
      $atividade['hora'] = "";
      $atividade['descricao'] = "";
      $atividade['hora'] = "";
      $model = new Materia();
      $dados = array();
      $materias = $model->read();

      $dados['atividade'] = $atividade;
      $dados['materias'] = $materias;
      $this->view("formularioAtividade", $dados);
    }

    public function editar($id) {
      $model = new Atividade();
      $atividade = $model->getById($id);
      $model1 = new Materia();
      $materias = $model1->read();
      $dados = array();
      $dados['atividade'] = $atividade;
      $dados['materias'] = $materias;
      $this->view("formularioAtividade", $dados);
    }

    public function excluir($id) {
      $model = new Atividade();
      $model->delete($id);
      $this->redirect('atividade/listar?mensagem=Atividade excluída com sucesso!');
    }

    public function salvar() {
      $atividade = array();
      $atividade['id'] = $_POST['id'];
      $atividade['data'] = $_POST['data'];
      $atividade['titulo'] = trim($_POST['titulo']);
      $atividade['materia_id'] = $_POST['materia_id'];
      $atividade['descricao'] = trim($_POST['descricao']);
      $atividade['hora'] = $_POST['hora'];
      if (!isset($_SESSION)) {
        session_start();
      }
      if(substr_count($_POST['titulo'], " ") == strlen($_POST['titulo']) || substr_count($_POST['descricao'], " ") == strlen($_POST['descricao'])){
          $this->redirect("atividade/novo?erro=Necessário preencher todos os campo!");
      }
      else {
        $atividade['usuario_id'] = $_SESSION['id_usuario'];
        $model = new Atividade();
        if ($atividade['id']==0) {
          $model->create($atividade);
          $this->redirect('atividade/listar?mensagem=Atividade cadastrada com sucesso!');
        } else {
          $model->update($atividade);
          $this->redirect('atividade/listar?mensagem=Atividade editada com sucesso!');
        }
      }
    }
  }
 ?>

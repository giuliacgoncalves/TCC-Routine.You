<?php
  class RotinaController extends Controller {
    public function listar() {
      $model = new Rotina();
      if (!isset($_SESSION)) {
        session_start();
      }
      $rotinas = $model->getByUser($_SESSION['id_usuario']);
      $dados = array();
      $dados['rotinas'] = $rotinas;
      $this->view("listagemRotina", $dados);
    }

    function formulario ($hora, $diaSemana){
      $model = new Rotina();
      if (!isset($_SESSION)) {
        session_start();
      }
      $rotinas = $model->getByUser($_SESSION['id_usuario']);
      $dados = array();
      $dados['rotinas'] = $rotinas;
      $rotina = array();

      $rotina = $model->getByUsuarioHoraDia($_SESSION['id_usuario'], $hora, $diaSemana);

      if (empty($rotina)) {
        $rotina = array();
        $rotina['hora'] = $hora;
        $rotina['dia'] = $diaSemana;
        $rotina['usuario_id'] = $_SESSION['id_usuario'];
        $rotina['titulo'] = 'titulo';
        $rotina['descricao'] = 'descricao';
      }

      else{
        echo "<a href='<?php echo APP.'rotina/editar'>";
      }
      $dados['rotina'] = $rotina;
      $modelTipo = new Tipo();
      $tipos = $modelTipo->read();
      $dados['tipos'] = $tipos;
      $this->view("listagemRotina", $dados);
    }

    public function editar($hora, $diaSemana) {
      $model = new Rotina();
      if (!isset($_SESSION)) {
        session_start();
      }
      $rotina = $model->getByUsuarioHoraDia($_SESSION['id_usuario'], $hora, $diaSemana);
      $modelTipo = new Tipo();
      $tipos = $modelTipo->read();
      $dados = array();
      $dados['rotina'] = $rotina;
      $dados['tipo_id'] = $tipos;
      $this->view("modal", $dados);
    }

    public function excluir($id) {
      $model = new Rotina();
      $rotina = $model->getById($id);
      // var_dump ($rotina);
      $model->delete($id);
      $this->redirect("rotina/listar?mensagem=Rotina excluída com sucesso!");
      exit();
    }

    public function salvar() {
      $rotina = array();
      $model = new Rotina();
      if (!isset($_SESSION)) {
        session_start();
      }
      $rotina = $model->getByUsuarioHoraDia($_SESSION['id_usuario'], $_POST['hora'], $_POST['dia']);
      if(empty($rotina)){
        $rotina['id'] = 0;
        $rotina['dia'] = $_POST['dia'];
        $rotina['hora'] = $_POST['hora'];
        $rotina['titulo'] = trim($_POST['titulo']);
        $rotina['descricao'] = trim($_POST['descricao']);
        $rotina['tipo_id'] = $_POST['tipo_id'];
        $rotina['usuario_id'] = $_SESSION['id_usuario'];
      }
      if(substr_count($_POST['titulo'], " ") == strlen($_POST['titulo']) || substr_count($_POST['descricao'], " ") == strlen($_POST['descricao'])){
          $this->redirect("rotina/listar?erro=Necessário preencher todos os campo!");
      }
      else if ($rotina['id']==0) {
          $model->create($rotina);
          $this->redirect("rotina/listar?mensagem=Rotina cadastrada com sucesso!");
      }
      else {
          $rotina['titulo'] = $_POST['titulo'];
          $rotina['descricao'] = $_POST['descricao'];
          $rotina['tipo_id'] = $_POST['tipo_id'];
          unset($rotina['usuario_id']);
          unset($rotina['hora']);
          unset($rotina['dia']);
          $model->update($rotina);
          $this->redirect("rotina/listar?mensagem=Rotina editada com sucesso!");
      }
    }
  }
 ?>

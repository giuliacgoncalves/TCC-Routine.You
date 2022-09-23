<?php
  class TipoController extends Controller {
    public function listar() {
      $model = new Tipo();
      $tipos = $model->read();
      $dados = array();
      $dados['tipos'] = $tipos;
      $this->view("listagemRotina", $dados);
    }
  }
 ?>

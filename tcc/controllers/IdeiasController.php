<?php
  class IdeiasController extends Controller {
    public function index() {
      $dados = array();
      $this->view("ideias", $dados);
    }
  }

 ?>

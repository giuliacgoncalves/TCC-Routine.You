<?php
  class Materia extends Model {
    protected $tabela="materia";
    protected $ordem="nome";

    function getByUserM($user_id) {
      $sql = "SELECT * FROM materia where user_id=:user_id";
      $sentenca = $this->conexao->prepare($sql);
      $sentenca->bindParam(":user_id", $user_id);
      $sentenca->execute();
      $sentenca->setFetchMode(PDO::FETCH_ASSOC);
      $dados = $sentenca->fetchAll();
      return $dados;
    }

    function readWithAtividades() {
      $modelAtividade = new Atividade();
      $materias = $this->read();
      for($i=0;$i<count($materias);$i++) {
        $materias[$i]['atividades'] =
        $modelAtividade->proxAtByMateria($materias[$i]['id']);
      }
      return $materias;
    }
  }
 ?>

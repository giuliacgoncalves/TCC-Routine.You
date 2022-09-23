<?php
require_once 'system/Model.php';
  class Rotina extends Model {
    protected $tabela="rotina";

    function getByUser($usuario_id) {
      $sql = "SELECT * FROM rotina where usuario_id=:usuario_id";
      $sentenca = $this->conexao->prepare($sql);
      $sentenca->bindParam(":usuario_id", $usuario_id);
      $sentenca->execute();
      $sentenca->setFetchMode(PDO::FETCH_ASSOC);
      $dados = $sentenca->fetchAll();
      return $dados;
    }

    function getByUsuarioHoraDia($usuario_id, $hora, $diaSemana) {
      $sql = "SELECT * FROM rotina where hora=:hora AND dia=:dia AND usuario_id=:id_usuario";
      $sentenca = $this->conexao->prepare($sql);
      $sentenca->bindParam(":id_usuario", $usuario_id);
      $sentenca->bindParam(":dia", $diaSemana);
      $sentenca->bindParam(":hora", $hora);
      $sentenca->execute();

      $sentenca->setFetchMode(PDO::FETCH_ASSOC);
      $dados = $sentenca->fetch();

      return $dados;
    }

  }
 ?>

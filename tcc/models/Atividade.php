<?php
    class Atividade extends Model {
      protected $tabela="atividade";
      protected $query="SELECT atividade.*, materia.nome as materia_nome FROM atividade LEFT JOIN materia ON materia.id = atividade.materia_id ORDER BY data DESC, atividade.id";
      protected $ordem="data DESC, atividade.id";

      function getByUser($usuario_id) {
        $sql = "SELECT atividade.*, materia.nome as materia_nome FROM atividade LEFT JOIN materia ON materia.id = atividade.materia_id where usuario_id=:usuario_id ORDER BY data, hora";
        $sentenca = $this->conexao->prepare($sql);
        $sentenca->bindParam(":usuario_id", $usuario_id);
        $sentenca->execute();
        $sentenca->setFetchMode(PDO::FETCH_ASSOC);
        $dados = $sentenca->fetchAll();
        return $dados;
      }
    }

 ?>

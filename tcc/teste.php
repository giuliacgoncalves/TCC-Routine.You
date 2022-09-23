//in_array(valorBuscado,arrayQVaiBuscar)
//array_search
<?php
  require_once 'models/Rotina.php';

 function verificaRotina ($hora, $diaSemana) {
  $model = new Rotina();
  if (!isset($_SESSION)) {
    session_start();
    $_SESSION['usuario_id'] = 2;
  }
  $rotina = $model->getByUser($_SESSION['usuario_id']);
  $dados = array();
  $dados = $rotina;

  if ($rotina){
    // gerar href para rotina/editar/id
    $rotina [id];
  }
  else {
    //gerar href para rotna/novo/$hora/$diaSemana
    echo "<button type='button' class='btn btn-outline-success' data-bs-toggle='modal' data-bs-target='#cadRoutineModal'><i class='bi bi-plus-circle'></i></button>";
  }

  include_once "views/listagemRotina.php";
}


  $horas = ['07:00-07:45', '07:45-08:30', '08:30-09:15', '09:35-10:20', '10:20-11:05', '11:05-11:50', '11:50-12:35', '13:00-13:45', '13:45-14:30', '14:30-15:15', '15h35-16:20', '16:20-17:05', '17:05-17:50', '17:50-18:35', '18:50-19:35', '19:35-20:20', '20:20-21:05', '21:15-22:00', '22:00-22:45'];
  $diasSemana = ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta'];

  echo "<table>";
  echo "<tr>";
  echo "<th>Horário</th>";
  foreach ($diasSemana as $diaSemana){
    echo "<th>$diaSemana</th>";
  }
  echo "</tr>";
  foreach ($horas as $hora) {
    echo "<td>$hora</td>";
    foreach ($diasSemana as $diaSemana) {
    //  buscar Rotina
      if ($hora=='11:50-12:35' || $hora=='17:50-18:35'){
        echo "<tr></tr>";
        // echo "<td>
        //
        // </td>";
      }
      else {
        echo "<td></td>";
      }
    }
  echo "</tr>";
  // echo "</tr>";
      // $rotina = getRotina ($hora, $diaSemana);
      // if ($rotina){
      //   // gerar href para rotina/editar/id
      //   $rotina [id];
      // }
      // else {
      //   //gerar href para rotna/novo/$hora/$diaSemana
      // }
  }
  echo "</table>";
?>

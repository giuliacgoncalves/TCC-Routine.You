<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

<style>
  table{
    font-size: 16px;
    font-family: 'Quicksand', sans-serif;
    font-weight: bold;
  }
  h1{
    font-size: 50px;
    font-family: 'Quicksand', sans-serif;
    padding: 2rem;
    text-align: center;
  }
</style>

<?php
  if (!empty($_GET['mensagem'])){
?>
<div class='alert alert-success alert-dismissible fade show' role='alert'>
<?php
  echo $_GET['mensagem'];
?>
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>
<?php
  }
?>
<?php
  if (!empty($_GET['erro'])){
?>
<div class='alert alert-danger alert-dismissible fade show' role='alert'>
<?php
  echo $_GET['erro'];
?>
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>
<?php
  }
?>
<h1>Minha Semana</h1>

<?php
  $horas = ['07:00-07:45', '07:45-08:30', '08:30-09:15', '09:35-10:20', '10:20-11:05', '11:05-11:50', '11:50-12:35', '13:00-13:45', '13:45-14:30', '14:30-15:15', '15:35-16:20', '16:20-17:05', '17:05-17:50', '17:50-18:35', '18:50-19:35', '19:35-20:20', '20:20-21:05', '21:15-22:00', '22:00-22:45'];
  $diasSemana = ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta'];

  echo "<table class='table table-bordered'>";
  echo "<tr align=center>";
  echo "<th style='width:10%' scope='row'>Horário</th>";
  foreach ($diasSemana as $diaSemana){
    echo "<th style=width:18% scope='row'>$diaSemana</th>";
  }
  echo "</tr>";
  foreach ($horas as $hora) {
    echo "<tr>";
    echo "<td>$hora</td>";
    foreach ($diasSemana as $diaSemana) {
    $caminho = APP;
    $titulo = "";
    foreach ($rotinas as $rot){
      if ($rot['dia']==$diaSemana && $rot['hora']==$hora){
        $titulo = $rot['titulo'];
        break;
      }
    }
      if ($titulo!=""){
        echo "<td align=center valign=bottom ><a href='$caminho/rotina/formulario/$hora/$diaSemana'>$titulo</a></td>";
      }
      else{
        echo "<td align=center><a href='$caminho/rotina/formulario/$hora/$diaSemana'><i class='bi bi-plus-circle'></i></a></td>";
      }

    }
  echo "</tr>";
  }
  echo "</table>";

  if(isset($rotina)) {
    include_once "modal.php";
  }
?>

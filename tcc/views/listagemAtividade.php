<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

<style>
  table{
    font-size: 16px;
    font-family: 'Quicksand', sans-serif;
  }
  .nova-atividade{
    font-size: 12px;
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

<h1>Atividades</h1>
<a class="btn btn-primary btn-lg nova-atividade" href="<?php echo APP; ?>atividade/novo" role="button"><i class="bi bi-plus-lg"></i></a>
</br>
</br>
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">Título</th>
      <th scope="col">Matéria</th>
      <th scope="col">Data</th>
      <th scope="col">Hora</th>
      <th scope="col">Descrição</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach ($atividades as $atividade) {
          $caminho = APP;
          $data = date("d/m/Y", strtotime($atividade['data']));
          $hora = date("H:i:s", strtotime($atividade['hora']));
          echo "
            <tr>
              <td style='width:15%'>{$atividade['titulo']}</td>
              <td style='width:15%'>{$atividade['materia_nome']}</td>
              <td style='width:10%'>$data</td>
              <td style='width:5%'>$hora</td>
              <td style='width:40%'>{$atividade['descricao']}</td>
              <td style='width:15%'>
              <a class='btn btn-primary' href='$caminho/atividade/editar/{$atividade['id']}' role='button'><i class='bi bi-pencil'></i></a>
              <a class='btn btn-danger bt-sm btn-excluir' href='$caminho/atividade/excluir/{$atividade['id']}' role='button'><i class='bi bi-trash'></i></a>
              <a class='btn btn-success bt-sm btn-conclui' href='$caminho/atividade/excluir/{$atividade['id']}' role='button'><i class='bi bi-check-square'></i></a>
              </td>
            </tr>";
        }
     ?>
  </tbody>
</table>
<?php
  if (isset($rotina)) {
    include_once "views/modal.php";
  }
 ?>
 <script>
   window.onload = function() {
     var elems = document.getElementsByClassName('btn-excluir');
     var confirmIt = function (e) {
         if (!confirm('Você tem certeza que deseja excluir?')) e.preventDefault();
     };
     for (var i = 0, l = elems.length; i < l; i++) {
         elems[i].addEventListener('click', confirmIt, false);
     }
   }
 </script>

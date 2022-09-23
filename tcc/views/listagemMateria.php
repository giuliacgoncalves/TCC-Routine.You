<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

<style>
  table{
    font-size: 16px;
    font-family: 'Quicksand', sans-serif;
  }
  .nova-materia{
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
<h1>Matérias</h1>
<a class="btn btn-primary btn-lg nova-materia" href="<?php echo APP; ?>materia/novo" role="button"><i class="bi bi-plus-lg"></i></a>
</br>
</br>
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach ($materias as $materia) {
          $caminho = APP;
          echo "
            <tr>
              <td>{$materia['nome']}</td>
              <td style='width:10%'>
              <a class='btn btn-primary' href='$caminho/materia/editar/{$materia['id']}' role='button'><i class='bi bi-pencil'></i></a>
              <a class='btn btn-danger bt-sm btn-excluir' href='$caminho/materia/excluir/{$materia['id']}' role='button'><i class='bi bi-trash'></i></a>
              </td>
            </tr>";
        }
     ?>
  </tbody>
</table>
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

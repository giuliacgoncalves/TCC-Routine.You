<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

<style>
  form{
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
<h1>Formulário Matéria</h1>
<form action="<?php echo APP; ?>materia/salvar" method="post" enctype="multipart/form-data">
  <input type="hidden" class="form-control" id="id" name="id" value='<?php echo "{$materia['id']}"; ?>'>

  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" value='<?php echo "{$materia['nome']}"; ?>' required>
  </div>
  </br>
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>

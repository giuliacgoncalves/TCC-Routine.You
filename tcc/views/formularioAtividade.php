<?php
  if (isset($_SESSION['id_usuario'])) {
    $id_usuario = $_SESSION['id_usuario'];
    $model = new Usuario();
    $usuarioLogado = $model->getById($id_usuario);
  }
 ?>

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
<h1>Nova Atividade</h1>
<form action="<?php echo APP; ?>atividade/salvar" method="post" enctype="multipart/form-data">
  <input type="hidden" class="form-control" id="id" name="id" value='<?php echo "{$atividade['id']}"; ?>'>
  <div class="mb-3">
    <label for="titulo" class="form-label">Título</label>
    <input type="text" class="form-control" id="titulo" name="titulo" value='<?php echo "{$atividade['titulo']}"; ?>' required>
  </div>
  <div class="mb-3">
    <label for="materia_id" class="form-label">Materia</label>
    <select class="form-select" name="materia_id">
      <?php
        $model = new Materia();
        $materias = $model->read();
        if (!isset($_SESSION)) {
          session_start();
        }
        $materias = $model->getByUserM($_SESSION['id_usuario']);
        $dados = array();
        $dados['materias'] = $materias;
        foreach ($materias as $materia) {
            $selected = $materia['id'] == $atividade['materia_id'] ? 'selected': '';
            echo "<option $selected value='{$materia['id']}'>{$materia['nome']}</option>";
        }
       ?>

    </select>
  </div>
  <div class="mb-3">
    <label for="data" class="form-label">Data</label>
    <input type="date" class="form-control" id="data" name="data" value='<?php echo "{$atividade['data']}"; ?>' required>
  </div>
  <div class="mb-3">
    <label for="hora" class="form-label">Hora</label>
    <input type="time" class="form-control" id="hora" name="hora" value='<?php echo "{$atividade['hora']}"; ?>' required>
  </div>
  <div class="mb-3">
    <label for="descricao" class="form-label">Descrição</label>
    <textarea class="form-control" id="descricao" name="descricao" rows="3" required><?php echo "{$atividade['descricao']}"; ?></textarea >
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
  </br>
  </br>
</form>

<div class="modal fade" id="cadRoutineModal" tabindex="-1" aria-labelledby="cadRoutineModal" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="RoutineModalLabel">Routine</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="routine-form" action="<?php echo APP; ?>rotina/salvar" method="post" enctype="multipart/form-data">
                  <span id="msgAlertErroLogin"></span>
                  <input type="hidden" class="form-control" id="id" name="id" value='<?php echo "{$rotina['id']}"; ?>'>
                  <div class="mb-3">
                      <label for="titulo" class="col-form-label">Título:</label>
                      <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Digite o titulo"
                    value='<?php echo "{$rotina['titulo']}"; ?>' required>
                  </div>
                  <div class="mb-3">
                      <label for="descricao" class="col-form-label">Descrição:</label>
                      <input type="text" name="descricao" class="form-control" id="descricao" autocomplete="on" placeholder="Digite a descricao" value="<?php echo $rotina['descricao'] ?>" required>
                  </div>
                  <div class="mb-3">
                      <label for="dia" class="col-form-label">Dia da Semana:</label>
                      <input readonly type="text" name="dia" class="form-control" id="dia" autocomplete="on" value="<?php echo $rotina['dia'] ?>"required>
                  </div>
                  <div class="mb-3">
                      <label for="hora" class="col-form-label">Horário:</label>
                      <input readonly type="text" name="hora" class="form-control" id="hora" autocomplete="on" value="<?php echo $rotina['hora'] ?>"required>
                  </div>

                  <div class="mb-3">
                    <label for="tipo_id" class="col-form-label">Tipo:</label>
                    <select class="form-select" name="tipo_id">
                      <?php
                        foreach ($tipos as $tipo) {
                          $selected =
                            $tipo['id'] == $rotina['tipo_id'] ?
                            'selected': '';
                          echo "<option $selected value='{$tipo['id']}'>{$tipo['titulo']}</option>";
                        }
                       ?>
                    </select>
                  </div>
                  <div class="mb-3 d-flex justify-content-between">
                      <input type="submit" class="btn btn-outline-success bt-sm" id="routine-form" value="Salvar">
                      <?php
                        if(!empty($rotina['id'])){?>
                          <?php
                            $caminho = APP;
                            echo"<a class='btn btn-outline-danger bt-sm btn-excluir' href='$caminho/rotina/excluir/{$rotina['id']}'
                              >Excluir</a>";
                           ?>

                      <?php } ?>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
<script>
  window.onload = function() {
    var myModal = new bootstrap.Modal(document.getElementById('cadRoutineModal'), {});
    myModal.show();
    var elems = document.getElementsByClassName('btn-excluir');
    var confirmIt = function (e) {
        if (!confirm('Você tem certeza que deseja excluir?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
  }
</script>

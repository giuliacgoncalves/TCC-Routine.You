<?php
session_start();
//Gerar senha
//echo password_hash("123456", PASSWORD_DEFAULT);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="imagens/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Celke - Sistema de login janela modal</title>
</head>

<body>
    <div class="container text-center">
        <!-- Substituir o botão pelos dados do usuário
        <div id="dados-usuario">
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                Acessar
            </button>
        </div>-->

        <?php
        if(isset($_SESSION['id']) and (isset($_SESSION['nome']))){
            echo "Bem vindo " . $_SESSION['nome'] . "<br>";
            echo "<a href='sair.php'>Sair</a><br>";
        }else{
            echo "<div id='dados-usuario'>";
            echo "<button type='button' class='btn btn-outline-success' data-bs-toggle='modal' data-bs-target='#cadUsuarioModal'>Cadastrar</button>";
            echo "</div>";
        }
        ?>


    </div>

    <div class="modal fade" id="AddAtivModal" tabindex="-1" aria-labelledby="AddAtivModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Nova Routine</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="login-usuario-form">
                        <span id="msgAlertErroLogin"></span>
                        <div class="mb-3">
                            <label for="titulo" class="col-form-label">Título:</label>
                            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Digite o titulo">
                        </div>
                        <div class="mb-3">
                            <label for="descricao" class="col-form-label">Descrição:</label>
                            <input type="text" name="descricao" class="form-control" id="descricao" autocomplete="on" placeholder="Digite a descricao">
                        </div>
                        <div class="mb-3">
                            <label for="dia" class="col-form-label">Dia da Semana:</label>
                            <input type="date" name="descricao" class="form-control" id="descricao" autocomplete="on" placeholder="Selecione">
                        </div>
                        <div class="mb-3">
                            <label for="hora" class="col-form-label">Horário:</label>
                            <input type="time" name="hora" class="form-control" id="hora" autocomplete="on" placeholder="Selecione ">
                        </div>
                        <div class="mb-3">
                            <label for="tipo" class="col-form-label">Tipo:</label>
                            <input type="text" name="tipo" class="form-control" id="tipo" autocomplete="on" placeholder="Selecione ">
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-outline-primary bt-sm" id="login-usuario-btn" value="Acessar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="cadUsuarioModal" tabindex="-1" aria-labelledby="cadUsuarioModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cadUsuarioModalLabel">Cadastrar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="cad-usuario-form">
                        <span id="msgAlertErroCad"></span>

                        <label for="titulo" class="col-form-label">Título:</label>
                        <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Digite o titulo">

                        <div class="mb-3">
                            <label for="descricao" class="col-form-label">Descrição:</label>
                            <input type="text" name="descricao" class="form-control" id="descricao" autocomplete="on" placeholder="Digite a descricao">
                        </div>
                        <div class="mb-3">
                            <label for="dia" class="col-form-label">Dia da Semana:</label>
                            <input type="date" name="descricao" class="form-control" id="descricao" autocomplete="on" placeholder="Selecione">
                        </div>
                        <div class="mb-3">
                            <label for="hora" class="col-form-label">Horário:</label>
                            <input type="time" name="hora" class="form-control" id="hora" autocomplete="on" placeholder="Selecione ">
                        </div>
                        <div class="mb-3">
                            <label for="tipo" class="col-form-label">Tipo:</label>
                            <input type="text" name="tipo" class="form-control" id="tipo" autocomplete="on" placeholder="Selecione ">
                        </div>

                        <div class="mb-3">
                            <input type="submit" class="btn btn-outline-success bt-sm" id="cad-usuario-btn" value="Cadastrar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
</body>

</html>

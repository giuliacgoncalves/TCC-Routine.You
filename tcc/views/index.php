<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

<style>
 .intro{
   padding-left: 15rem;
   padding-right: 15rem;
   padding-top: 2rem;
 }
 .texto{
   font-size: 25px;
   font-family: 'Quicksand', sans-serif;
   text-align: justify;
 }
 .logo{
   width: 35%;
   padding-bottom: 2rem;
 }
 h1{
   font-size: 50px;
   font-family: 'Quicksand', sans-serif;
   font-weight: bold;
 }
 @media only screen and (max-width: 1200px) {
   .intro{
     padding-left: 10rem;
     padding-right: 10rem;
     padding-top: 2rem;
   }
   .texto{
     font-size: 16px;
     font-family: 'Quicksand', sans-serif;
     text-align: justify;
   }
   .logo{
     width: 30%;
     padding-bottom: 2rem;
   }
   h1{
     font-size: 30px;
     font-family: 'Quicksand', sans-serif;
     font-weight: bold;
   }
 }
 @media only screen and (max-width: 800px) {
   .intro{
     padding-left: 10rem;
     padding-right: 13rem;
     padding-top: 2rem;
   }
   .texto{
     font-size: 15px;
     font-family: 'Quicksand', sans-serif;
     text-align: justify;
   }
   .logo{
     width: 20%;
     padding-bottom: 2rem;
   }
   h1{
     font-size: 30px;
     font-family: 'Quicksand', sans-serif;
     font-weight: bold;
   }
 }
 @media only screen and (max-width: 600px) {
   .intro{
     padding-left: 5rem;
     padding-right: 5rem;
     padding-top: 2rem;
   }
   .texto{
     font-size: 18px;
     font-family: 'Quicksand', sans-serif;
     text-align: justify;
   }
   .logo{
     width: 50%;
     padding-bottom: 2rem;
   }
   h1{
     font-size: 30px;
     font-family: 'Quicksand', sans-serif;
     font-weight: bold;
   }
 }
 @media only screen and (max-width: 400px) {
   .intro{
     padding-left: 5rem;
     padding-right: 2rem;
     padding-top: 2rem;
   }
   .texto{
     font-size: 18px;
     font-family: 'Quicksand', sans-serif;
     text-align: justify;
   }
   .logo{
     width: 40%;
     padding-bottom: 2rem;
   }
   h1{
     font-size: 25px;
     font-family: 'Quicksand', sans-serif;
     font-weight: bold;
   }
 }
</style>

  <div class="intro">
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
    <h1>Bem vindo(a) ao Routine.You!!<h1>
    </br>

    <p class="texto">Sabemos o quão difícil pode ser lidar com tantas informações, datas de entregas, atividades,
      provas, trabalhos, eventos, horários... Tantas coisas que nós alunos do IF precisamos fazer.</p>

    <p class="texto">Mas aqui está a sua solução!</p>

    <p class="texto">Esperamos que esse site possa te ajudar na organização da sua rotina acadêmica!</p>

  </div>
  <div class="text-center">
    <?php
        $caminho = APP;
        echo "<img class='logo' src='$caminho/imagens/logo.png'>";
    ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

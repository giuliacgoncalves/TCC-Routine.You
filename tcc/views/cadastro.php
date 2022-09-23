<?php
  $email = "";
  if (isset($_COOKIE["erro"])) {
    echo "<div class='p-3 mb-2 bg-danger text-white'>
      {$_COOKIE['erro']}
    </div>";
    if (isset($_COOKIE['email'])) {
      $email = $_COOKIE['email'];
    }
  }
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

<style>
  form{
     font-size: 22px;
     font-family: 'Quicksand', sans-serif;
     padding-left: 15rem;
     padding-right: 25rem;
     padding-top: 2rem;
     padding-bottom: 2rem;
   }
   h1{
     font-size: 50px;
     font-family: 'Quicksand', sans-serif;
     text-align: left;
     padding-top: 2rem;
     padding-left: 15rem;
   }
   button{
     align-items: center;
     font-size: 50px;
   }
   @media only screen and (max-width: 1200px) {
     form{
       font-size: 17px;
       font-family: 'Quicksand', sans-serif;
       padding-left: 10rem;
       padding-right: 18rem;
       padding-top: 2rem;
       padding-bottom: 2rem;
     }
     h1{
       font-size: 30px;
       font-family: 'Quicksand', sans-serif;
       padding-top: 2rem;
       text-align: left;
       padding-left: 10rem;
     }
     button{
       align-items: center;
       font-size: 25px;
     }
   }
   @media only screen and (max-width: 800px) {
     form{
       font-size: 17px;
       font-family: 'Quicksand', sans-serif;
       padding-left: 10rem;
       padding-right: 10rem;
       padding-top: 2rem;
       padding-bottom: 2rem;
     }
     h1{
       font-size: 25px;
       font-family: 'Quicksand', sans-serif;
       padding-top: 2rem;
       text-align: left;
       padding-left: 10rem;
     }
     button{
       align-items: center;
     }
   }
   @media only screen and (max-width: 600px) {
     form{
       font-size: 18px;
       font-family: 'Quicksand', sans-serif;
       padding-left: 1rem;
       padding-right: 2rem;
       padding-top: 2rem;
       padding-bottom: 2rem;
     }
     h1{
       font-size: 25px;
       font-family: 'Quicksand', sans-serif;
       padding-top: 2rem;
       text-align: left;
       padding-left: 1rem;
     }
     button{
       align-items: center;
     }
   }
   @media only screen and (max-width: 400px) {
     form{
       font-size: 18px;
       font-family: 'Quicksand', sans-serif;
       padding-left: 1rem;
       padding-right: 2rem;
       padding-top: 2rem;
       padding-bottom: 2rem;
     }
     h1{
       font-size: 25px;
       font-family: 'Quicksand', sans-serif;
       padding-top: 2rem;
       text-align: left;
       padding-left: 1rem;
     }
     button{
       align-items: center;
     }
   }
</style>

<h1>Cadastro</h1>

<form action="<?php echo APP; ?>cadastro/salvar" method="post" enctype="multipart/form-data">
  <div class="form">
    <input type="hidden" class="form-control" id="id" name="id" value='<?php echo "{$usuario['id']}"; ?>'>
    <div class="mb-3 row">
      <label for="email" class="col-sm-2 col-form-label">E-mail</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="email" value='<?php echo "$email"; ?>'>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="senha" class="col-sm-2 col-form-label">Senha</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="senha" name="senha" value=''>
      </div>
    </div>
    </br>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>

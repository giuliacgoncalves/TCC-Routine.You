<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

<style>
  .container{
    font-size: 16px;
    font-family: 'Quicksand', sans-serif;
    padding-bottom: 2rem;
  }
  h1{
    font-size: 50px;
    font-family: 'Quicksand', sans-serif;
    padding: 2rem;
    text-align: center;
  }
  h5{
    font-size: 18px;
    font-family: 'Quicksand', sans-serif;
    font-weight: bold;
  }
  p{
    font-size: 16px;
    font-family: 'Quicksand', sans-serif;
    text-align: justify;
  }

  .row{
    margin-left: 9px;
  }
  .card{
    width: 14rem;
  }
  @media only screen and (max-width: 1200px) {
    .container{
      font-size: 16px;
      font-family: 'Quicksand', sans-serif;
      padding-bottom: 2rem;
    }
    h1{
      font-size: 50px;
      font-family: 'Quicksand', sans-serif;
      padding: 2rem;
      text-align: center;
    }
    h5{
      font-size: 18px;
      font-family: 'Quicksand', sans-serif;
      font-weight: bold;
    }
    p{
      font-size: 16px;
      font-family: 'Quicksand', sans-serif;
      text-align: justify;
    }

    .row{
      margin-left: 9px;
    }
    .card{
      width: 14rem;
    }
  }
  @media only screen and (max-width: 800px) {
    .container{
      font-size: 16px;
      font-family: 'Quicksand', sans-serif;
      padding-bottom: 2rem;
    }
    h1{
      font-size: 50px;
      font-family: 'Quicksand', sans-serif;
      padding: 2rem;
      text-align: center;
    }
    h5{
      font-size: 18px;
      font-family: 'Quicksand', sans-serif;
      font-weight: bold;
    }
    p{
      font-size: 16px;
      font-family: 'Quicksand', sans-serif;
      text-align: justify;
    }

    .row{
      margin-left: 9px;
    }
    .card{
      width: 15rem;
    }
  }
  @media only screen and (max-width: 600px) {
    .container{
      font-size: 16px;
      font-family: 'Quicksand', sans-serif;
      padding-bottom: 2rem;
    }
    h1{
      font-size: 45px;
      font-family: 'Quicksand', sans-serif;
      padding: 2rem;
      text-align: center;
    }
    h5{
      font-size: 18px;
      font-family: 'Quicksand', sans-serif;
      font-weight: bold;
    }
    p{
      font-size: 16px;
      font-family: 'Quicksand', sans-serif;
      text-align: justify;
    }

    .row{
      margin-left: 9px;
    }
    .card{
      width: 14rem;
    }
  }
  @media only screen and (max-width: 400px) {
    .container{
      font-size: 16px;
      font-family: 'Quicksand', sans-serif;
      padding-bottom: 2rem;
      padding-left: 1rem;
    }
    h1{
      font-size: 40px;
      font-family: 'Quicksand', sans-serif;
      padding: 2rem;
      text-align: center;
    }
    h5{
      font-size: 18px;
      font-family: 'Quicksand', sans-serif;
      font-weight: bold;
    }
    p{
      font-size: 16px;
      font-family: 'Quicksand', sans-serif;
      text-align: justify;
    }
    .row{
      margin-left: 0px;
    }
    .card{
      width: 11rem;
    }
  }
</style>

<h1>Ideias<h1>

<div class="container">
  <div class="row row-cols-1 row-cols-md-4 g-2">
    <div class="col-sm">
      <div class="card">
        <?php
            $caminho = APP;
            echo "<img src='$caminho/imagens/pomodorin.jpeg' class='card-img-top'>";
        ?>
        <div class="card-body">
          <h5 class="card-title">Pomodoro</h5>
          <p class="card-text">O m??todo Pomodoro consiste em buscar melhora na gest??o do tempo tornando-se mais eficientes.
          </br>Op????o de aplicativo: Forest</p>
          <a href="https://www.napratica.org.br/pomodoro/" target="_blank" class="btn btn-primary">Leia mais...</a>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="card">
        <?php
            $caminho = APP;
            echo "<img src='$caminho/imagens/mind.jpg' class='card-img-top'>";
        ?>
        <div class="card-body">
          <h5 class="card-title">Mapa Mental</h5>
          <p class="card-text">Mapas mentais s??o representa????es visuais amplamente utilizados para manter dados organizados, como instrumento de memoriza????o e estudo.</p>
          <a href="https://www.adobe.com/br/express/create/mind-map" target="_blank" class="btn btn-primary">Leia mais...</a>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="card">
        <?php
            $caminho = APP;
            echo "<img src='$caminho/imagens/espaco.jpg' class='card-img-top'>";
        ?>
        <div class="card-body">
          <h5 class="card-title">Dica: Organizar espa??o </h5>
          <p class="card-text">A Organiza????o do ambiente de estudos ?? um fator important??ssimo para obter um melhor desempenho na apredizagem. </p>
          <a href="https://www.estudaqui.com/blog/organizacao-de-estudos/organizar-ambiente-estudo/" target="_blank" class="btn btn-primary">Leia mais...</a>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="card">
        <?php
            $caminho = APP;
            echo "<img src='$caminho/imagens/alimentacao.jpg' class='card-img-top'>";
        ?>
        <div class="card-body">
          <h5 class="card-title">Dica: Alimentar-se bem</h5>
          <p class="card-text">Uma alimenta????o adequada e com os nutrientes certos pode fazer toda diferen??a no resultado da aprendizagem.</p>
          <a href="https://www.estudaqui.com/blog/como-estudar/alimentacao-para-estudar/" target="_blank" class="btn btn-primary">Leia mais...</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row row-cols-1 row-cols-md-4 g-2">
    <div class="col-sm">
      <div class="card">
        <?php
            $caminho = APP;
            echo "<img src='$caminho/imagens/flash.jpeg' class='card-img-top'>";
        ?>
        <div class="card-body">
          <h5 class="card-title">Flash Cards</h5>
          <p class="card-text">Flashcards s??o pequenos cart??es para testar sua mem??ria. Essencialmente, eles t??m de um lado, uma pergunta, e do outro, a resposta.</p>
          <a href="https://www.soulmedicina.com.br/noticia/104/o-que-sao-e-como-usar-flashcards/" target="_blank" class="btn btn-primary">Leia mais...</a>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="card" >
        <?php
            $caminho = APP;
            echo "<img src='$caminho/imagens/resumo.jpeg' class='card-img-top'>";
        ?>
        <div class="card-body">
          <h5 class="card-title">Resumo</h5>
          <p class="card-text">O Resumo ?? um mecanismo em que se aponta somente as ideias principais de um texto, de forma que ?? produzido um novo texto reduzido.</p>
          <a href="https://www.todamateria.com.br/resumo-de-texto/" target="_blank" class="btn btn-primary">Leia mais...</a>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="card">
        <?php
            $caminho = APP;
            echo "<img src='$caminho/imagens/exercicio.jpg' class='card-img-top'>";
        ?>
        <div class="card-body">
          <h5 class="card-title">Dica: Atividade F??sica</h5>
          <p class="card-text">A pr??tica de exerc??cios f??sicos frequentemente apresenta diversos benef??cios para um melhor rendimento dos estudos acad??micos.</p>
          <a href="https://www.estrategiaconcursos.com.br/blog/como-a-atividade-fisica-pode-te-ajudar-nos-estudos/" target="_blank" class="btn btn-primary">Leia mais...</a>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="card">
        <?php
            $caminho = APP;
            echo "<img src='$caminho/imagens/distracao.jpg' class='card-img-top'>";
        ?>
        <div class="card-body">
          <h5 class="card-title">Dica: Evite Distra????es</h5>
          <p class="card-text">As distra????es podem ser o nosso maior inimigo na hora de estudar. Por isso, precisamos identific??-las e n??o deixar com que elas nos atrapalhem.</p>
          <a href="http://oficinadoestudante.com.br/blogdobixo/10-dicas-para-evitar-distracoes-na-hora-de-estudar/" target="_blank" class="btn btn-primary">Leia mais...</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row row-cols-1 row-cols-md-4 g-2">
    <div class="col-sm">
      <div class="card">
        <?php
            $caminho = APP;
            echo "<img src='$caminho/imagens/mnemonico.jpg' class='card-img-top'>";
        ?>
        <div class="card-body">
          <h5 class="card-title">Mnem??nica</h5>
          <p class="card-text">A t??cnica Mnem??nica ?? o uso de frases e m??sicas que ajudam a fixar determinado assunto. Trata-se da associa????o de f??rmulas f??sicas e matem??ticas, defini????es e nomenclaturas, etc.</p>
          <a href="https://www.soulmedicina.com.br/noticia/167/dicas-de-estudo-tecnica-mnemonica/" target="_blank" class="btn btn-primary">Leia mais...</a>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="card">
        <?php
            $caminho = APP;
            echo "<img src='$caminho/imagens/pratica.jpg' class='card-img-top'>";
        ?>
        <div class="card-body">
          <h5 class="card-title">Pr??tica</h5>
          <p class="card-text">A Pr??tica ?? botar a m??o na massa! Se voc?? est?? se preparando para alguma prova, a simula????o ?? fundamental. Busque por exerc??cios com base no exame que voc?? ir?? realizar.</p>
          <a href="https://www.linkus.com.br/blog/pare-de-pensar-e-comece-a-colocar-as-coisas-em-pratica-o-poder-de-praticar-mais/" target="_blank" class="btn btn-primary">Leia mais...</a>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="card">
        <?php
            $caminho = APP;
            echo "<img src='$caminho/imagens/divertido.jpg' class='card-img-top'>";
        ?>
        <div class="card-body">
          <h5 class="card-title">Dica: Divirta-se!!</h5>
          <p class="card-text">Muitos pensam que estudar tem que ser algo chato. Mas a verdade ?? que podemos estudar de forma divertida! Podemos treinar habilidades por meio de jogos, aprender com filmes, podcasts.</p>
          <a href="https://www.lfg.com.br/conteudos/dicas/geral/concurseiros-como-tornar-a-rotina-de-estudos-mais-divertida" target="_blank" class="btn btn-primary">Leia mais...</a>
        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="card">
        <?php
            $caminho = APP;
            echo "<img src='$caminho/imagens/planeja.jpg' class='card-img-top'>";
        ?>
        <div class="card-body">
          <h5 class="card-title">Dica: Como planejar?</h5>
          <p class="card-text">A rotina ?? muito importante para a vida acad??mica. Por isso, precisamos planejar nossa semana da forma correta e que esteja de acordo com o nosso estilo de vida.</p>
          <a href="https://blog.estacio.br/futuro-profissional/rotina-de-estudos/?utm_campaign=PMax|Pos|Presencial|Google(GDN)|PerformanceMax&gclid=Cj0KCQjwpv2TBhDoARIsALBnVnkjMH66tVCWFYd3r-lqUNXWWFYCQtzbXGOPCF9q2YD5J9BJwwY0iNkaAlogEALw_wcB" target="_blank" class="btn btn-primary">Leia mais...</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

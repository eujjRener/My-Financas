<?php
    session_start();
    include "../ladding page/config.php";
    //print_r($_SESSION);
   
    if((isset($_SESSION['email']) == false) and (isset($_SESSION['senha']) == false))
    {
       unset($_SESSION['email']);
       unset($_SESSION['senha']);
       header('location:../index.php');
    }
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <link rel="shortcut icon" href="img/Custom-Icon-Design-Flatastic-11-Cash.ico" type="image/x-icon">
    <title>
      <?php echo $title; ?>
    </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="../ladding page/styles/style.css">
    <link rel="stylesheet" href="../ladding page/styles/fonts.css">
    <link rel="stylesheet" href="../ladding page/styles/media.css">
    <link rel="stylesheet" href="css/carousel.css">

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script> 
   

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
   
      body{
    background-color: rgb(34, 34, 34);
    color: white;
    font-family: poppinsregular;
    max-width: 1600px;
    margin: 0 auto;
    padding: 15px;
}
      header{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}
#title{
    flex-direction: column;
    line-height: 10px;
}
li{
    display: inline-block;
    margin: 20px;
}
      .letranav{
        font-size: 1vw;
       color:#77ffc0;
      }
      .letra{
        font-family:'Anek Malayalam', sans-serif;
        font-size: 80px;
        color: black;
      }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .ht{
    font-weight: 200;
    color: white;
}
a{
    color: white;
}

a:hover{
    color: rgb(26, 151, 74);
    transition: 0.3s all;
}
#inscreva-se-btn{
    border: 2px solid rgb(26, 151, 74);
    padding: 10px;
    border-radius: 15px;
}

#inscreva-se-btn:hover{
    background-color: rgb(26, 151, 74);
    color: white;


}
span{
    color: rgb(26, 151, 74);
}
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
<br>    
<?php include "header.php"; ?>  
<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <!--<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>-->
       <img src="img/myfinanceprévia.jpg" class="d-block w-100" alt="..." style="opacity:60% ;">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1 class="letra"><a link="">MyFinanças</a></h1>
            <p class="letra">Seu auxiliar financeiro, para te ajudar a cuidar de suas finanças.</p>
            <p class="letra"><a class="btn btn-success" href="#">Veja mais</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
       <!--<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>--> 
        <img src="img/myfinanceprévia.jpg" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption">
            <h1 class="letra">Cálculos financeiros</h1>
            <p class="letra">Deixe o trabalho pesado para nós, calculamos para você.</p>
            <p class="letra"><a class="btn btn-success" href="teste-calculos.php">Calcular agora.</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
       <!--<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>-->
       <img src="img/myfinanceprévia.jpg" class="d-block w-100" alt="...">
       <div class="container">
          <div class="carousel-caption text-end">
            <h1 class="letra">Notícias</h1>
            <p class="letra">Informação é tudo, anida mais para cuidarmos de nossas finanças, fique bem informado.</p>
            <p class="letra"><a class="btn btn-success" href="albumNews.php">Ver mais</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-3">
        <img src="img/percentage-icon.png" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

        <h2 class="fw-normal">Faça seu planejamento familiar </h2>
        <p>Uma aba destinada para o cálculo em Excel das contas do mês e dicas de como usar-lo</p>
        <p><a class="btn btn-secondary" href="planejamento.php">Mais Detalhes &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3">
        <img src="img/mobile-statistics-icon.png" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

        <h2 class="fw-normal">Faça sua contabilidade</h2>
        <p>Calculos de Juros Simples e Composto, Tabela Price, Taxa OVER</p><br>
        <p><a class="btn btn-secondary" href="teste-calculos.php">Mais Detalhes &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3">
        <img src="img/news-icon.png" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title></title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>
            
        <h2 class="fw-normal">Notícias</h2>
        <p>Notícias atualizadas sobre o mundo financeiro e sobre investimentos.</p><br><br><br>
        <p><a class="btn btn-secondary" href="albumNews.php">Mais detalhes &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3">
        <img src="img/name-card-icon.png" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title></title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

        <h2 class="fw-normal">Crie uma conta</h2>
        <p>Com o cadastro de uma conta no MyFinanças, você terá avisos na sua caixa de email e acesso a atualizações.</p><br><br>
        <p><a class="btn btn-secondary" href="../ladding page/cadastrar.php">Mais Detalhes &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1" style="margin-top: 10px; color: white;">My<span>Finanças</span> . <span class="text-muted">Onde suas finanças são nossa preoucupação.</span></h2>
       
      </div>
      <div class="col-md-5">
        <!--<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg
        " role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
          <img  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="img/dinheiro.jpg " style="border-radius: 40px;">
      </div>
    </div>

    

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Volte para o topo</a></p>
    <p>&copy; 2022 FUNDÃO Company, Inc. &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
  </footer>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>

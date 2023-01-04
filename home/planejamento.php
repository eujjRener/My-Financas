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

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <link rel="shortcut icon" href="img/Custom-Icon-Design-Flatastic-11-Cash.ico" type="image/x-icon">
    <title><?php echo $title ; ?></title>
    <link rel="stylesheet" href="../ladding page/styles/style.css">
    <link rel="stylesheet" href="../ladding page/styles/fonts.css">
    <link rel="stylesheet" href="../ladding page/styles/media.css">
    <link rel="stylesheet" href="css/style.css">

    

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
    text-decoration: none;
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

  


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

  
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h5 class="featurette-heading fw-normal lh-1" style="margin-top: 10px;">  <span class="text-muted"> Exemplo da nossa planilha</span></h5>
        <br><br>
        <p style="color:white">Aqui você poderá colocar suas despesas como:<br> Gastos(Aluguel, Energia, Água, Gás, entre outros)<br><br>
        Dependentes(Escola, gastos com seus filhos, Mesada, entre outros) <br><br>
        Saúde(Convênios Médicos, Dentistas, Farmácia, Academia, pets, entre outros)
      </p>
       
      </div>
      <div class="col-md-5">
        <!--<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg
        " role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
          <img  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="pfO/habitacao.PNG" style="border-radius: 20px;">
      </div>
    </div>
    <hr>
    <br>
    <div class="row featurette">
      <div class="col-md-7">
        <h5 class="featurette-heading fw-normal lh-1" style="margin-top: 10px;">  <span class="text-muted"> Exemplo do calculo final da Planilha</span></h5>
        <br><br>
        <p style="color:white">  Aqui você poderá colocar suas Despesas Pessoas, investimentos, Cartão de Crédito, Despesas de automovél. Com isso você verá a sua situação Financeira
      </p>
       
      </div>
      <div class="col-md-5">
        <!--<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg
        " role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg> -->
          <img  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="pfO/situacao_final.PNG" style="border-radius: 20px;">
      </div>
    </div>

    <hr class="featurette-divider">
    <div>
      <h3><span>Aqui está o download da planilha</span></h3>
      <a href="pfO/planejamento familiar.xlsx" type="application/vnd.sealed.xlsx"   download="pfO/planejamento familiar.xlsx">Planilha Orçamentária</a>
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

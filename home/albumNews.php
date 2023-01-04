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
    <title><?php echo $title ; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">  
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <link rel="stylesheet" href="../ladding page/styles/style.css">
    <link rel="stylesheet" href="../ladding page/styles/fonts.css">
    <link rel="stylesheet" href="../ladding page/styles/media.css">

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

    
  </head>
  <body>
    <br>
    <?php include "header.php"; ?>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <br>
        <br>
        <h1 class="fw-light">Notícias</h1>
        <p class="lead text-muted">Notícas atualizadas sobre o mercado Financeiro e de investimentos. Dicas úteis para seu aprendizado.</p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
           <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <img  class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" width="100%" height="225" alt="..." src="img/notícias/g1-senai-curso-tecnico-semipresencial-automacao-interna.webp">
            <div class="card-body">
              <p class="letranot">Brasil avança no Índice Global de Inovação, mas investimentos na área têm caído, diz CNI (G1)</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <a button type="button" class="btn btn-sm btn-outline-secondary" href="https://g1.globo.com/economia/noticia/2022/09/29/brasil-avanca-no-indice-global-de-inovacao-mas-investimentos-na-area-tem-caido-diz-cni.ghtml">Ver</button></a>
                </div>
               <!-- tempo que a notícia foi lançada--> <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
           <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <img  class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" width="100%" height="225" alt="..." src="img/notícias/bolsas.webp">
            <div class="card-body">
              <p class="letranot">Mercado financeiro reduz para 5,60% estimativa de inflação em 2022 e vê alta maior do PIB (G1)</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a button type="button" class="btn btn-sm btn-outline-secondary" href="https://g1.globo.com/economia/noticia/2022/10/24/mercado-financeiro-reduz-para-560percent-estimativa-de-inflacao-em-2022-e-ve-alta-maior-do-pib.ghtml">Ver</button> </a>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
           <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <img  class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" width="100%" height="225" alt="..." src="img/notícias/noticia1.webp">
            <div class="card-body">
              <p class="letranot" style="font-size: 16.499999px ;">Empresa de criptomoeda é investigada pelo MP por possível esquema de pirâmide em Rio Branco (G1)</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <a button type="button" class="btn btn-sm btn-outline-secondary" href="https://g1.globo.com/ac/acre/noticia/2022/10/26/empresa-de-criptomoeda-e-investigada-pelo-mp-por-possivel-esquema-de-piramide-em-rio-branco.ghtml">Ver</button></a>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col">
          <div class="card shadow-sm">
           <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <img  class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" width="100%" height="225" alt="..." src="img/notícias/real-moedadinheiro-jfcrz-abr-1701220041-1.jpg">
            <div class="card-body">
              <p class="letranot">Juros estáveis, inflação menor: veja como ficam os investimentos(G1)</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <a button type="button" class="btn btn-sm btn-outline-secondary" href="https://g1.globo.com/economia/noticia/2022/10/26/juros-estaveis-inflacao-menor-veja-como-ficam-os-investimentos.ghtml">Ver</button></a>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
           <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <img  class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" width="100%" height="225" alt="..." src="img/notícias/irbbrasil_100820220510.webp">
            <div class="card-body">
              <p class="letranot">IRB Brasil (IRBR3): ação fecha em alta superior a 8% (E-Investidor)</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <a button type="button" class="btn btn-sm btn-outline-secondary" href="https://einvestidor.estadao.com.br/ultimas/irbr3-irb-brasil-fecha-alta-27-outubro/">Ver</button></a>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img  class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" width="100%" height="225" alt="..." src="img/notícias/vale-washington-alves-reuters_220320202115.webp">
            <div class="card-body">
              <p class="letranot">Vale tem lucro de US$ 4,445 bi no 3tri22 (E-Investidor)</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                 <a button type="button" class="btn btn-sm btn-outline-secondary" href="https://einvestidor.estadao.com.br/ultimas/vale3-vale-lucro-terceiro-trimestre-2022/">Ver</button></a>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Volte para o topo</a>
    </p>
    <p class="mb-1">Notícas &copy; 2022 FUNDÃO Company </p>
    <p class="mb-0">   <a href="index.html">Visite a página inical</a> .</p>
  </div>
</footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>

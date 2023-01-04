<?php
    session_start();
    include "../../ladding page/config.php";
    //print_r($_SESSION);
   
    if((isset($_SESSION['email']) == false) and (isset($_SESSION['senha']) == false))
    {
       unset($_SESSION['email']);
       unset($_SESSION['senha']);
       header('location:../../index.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/Custom-Icon-Design-Flatastic-11-Cash.ico" type="image/x-icon">
    <title>MyFinanças - Tabela Price e Sac</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="style1.css">

                <link rel="stylesheet" href="../../ladding page/styles/style.css">
                <link rel="stylesheet" href="../../ladding page/styles/fonts.css">
                <link rel="stylesheet" href="../../ladding page/styles/media.css">
    
                <style>
                    /* body {
                       background-image: url(img/267d9102-a49b-e134-b32a-228766d8de25.jpg);
                   margin: 0;
                   font-family: 'Noto Sans', sans-serif;
               background-color: #201b2c;
                 width: auto;
                 background-attachment: fixed;
                 color: #f0ffffde;
                 background-attachment: fixed;
                 */
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
               .card-ans{
                display: flex;
                
                justify-content: center;
               }
               .txt-ans{
                margin-right: 10%;
               }
               .box-ans{
                background-color: rgb(49, 49, 49);
                border-radius: 10%;
                margin-top: 20px;
                height: 20px;
                padding: 15px;
                border-radius: 20px;
                border: none;
                font-size: 15px;
               }
                   </style>
</head>
<body>
    <header style="margin-top: -10px;">
        <div id="title">
            <a href="../index.php" class="" style="text-decoration: none;"><h1 class="ht" style="margin-top: -15px;">My<span>Finanças</span></h1></a>
        </div>
      
        <ul>
            <a href="../index.php"><li>Início</li></a>
            <a href="../teste-calculos.php"><li>Faça sua contabilidade</li></a>
            <a href="../albumNews.php"><li>Notícas</li></a>
            <a href="../planejamento.php"><li>Planejamento Familiar</li></a>
            <a href="#"><li>Sobre</li></a>
            <a href="../../ladding page/perfil.php" id="inscreva-se-btn"><li>Meu perfil</li></a>
        </ul>
      </header>
      <hr>
      <br>
      <br>
<div>
    <h1 class="name-class">Calcule seus financiamentos</h1>
    <span class="bottomtext" style="margin-left: 30%;">Aqui você poderá calcular a sua amortização pela tabela PRICE ou SAC</span>
</div>
<br><br><br>
<form  id="simulador" name="simulador" method="post">
    <div class="card-ans" style="margin-left: 15%;">
      <div>
        <p class="txt-ans">Digite o Valor total financiado:</p>
        <input type="text" id="valor" class="box-ans" placeholder="Valor financiado" style="color:white">
      </div>
      <div>
        <p class="txt-ans">Digite a taxa de juros(%) ao mês:</p>
        <input type="text" id="taxa" class="box-ans" placeholder="Taxa" style="color:white">
      </div>
      <div>
        <p class="txt-ans">Digite a quantidade total de parcelas(em meses):</p>
        <input type="number" id="parcelas" class="box-ans" placeholder="Total de meses" style="color:white">
      </div>
    </div>
    <div style="display:flex ; margin-left: 40%; margin-right: 40% ;">
    <button class="btn-login" id="simular" type="submit">Ver</button>
    </div>
</form>
<div id="resultado" class="resultado">


</div>
<div class="card-tab">
    <div id="tabelaPrice" class="tabelaPrice">

    </div>
</div>
<div id="resultado2" class="resultado">
  


</div>
  <div class="card-tab">
      <div id="tabelaSac" class="tabelaSac">

      </div>
      <div id="tabelaSac2" class="tabelaSac">

        
      </div>

    
  </div>
    <script type="text/javascript" src="bundle.js"></script>
</body>
</html>
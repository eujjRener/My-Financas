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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/Custom-Icon-Design-Flatastic-11-Cash.ico" type="image/x-icon">
    <title><?php echo $title ; ?></title>
    <link rel="stylesheet" href="css/style.css">

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

    <div class="box-cards">
        <div class="card-dark-left">
            <br>
            <h3 class="title">Cálculos</h3>
            <a href="taxa-OVER/taxa-OVER.php" class="pescolha"><p class="pescolha">Verifique sua taxa OVER</p></a>
            <a href="tabela_price_sac/tabela_price_sac.php" class="pescolha"><p class="pescolha">Calcular a tabela PRICE e SAC</p></a>
            
        </div>
        <div class="card-dark-right">
            <br>
            <h3 class="title">Calcule seus Juros</h3>
            <a href="juros_compostos/juros_compostos.php" class="pescolha"><p class="pescolha">Calcule seus juros compostos</p></a>
            <a href="juros_simples/juros_simples.php" class="pescolha"><p class="pescolha">Calcule seus juros simples</p></a>
            
           

        </div>
    </div>
    
</body>
</html>
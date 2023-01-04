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
    <html >
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="shortcut icon" href="../img/Custom-Icon-Design-Flatastic-11-Cash.ico" type="image/x-icon">
                <title> Juros simples</title>
                <link rel="stylesheet" href="../css/style.css">
                <link rel="stylesheet" href="../juros_compostos/style1.css">
                <script src="script_juros_simples.js" defer></script>

                <link rel="stylesheet" href="../stylejuros.css">
                

                <link rel="stylesheet" href="../../ladding page/styles/style.css">
                <link rel="stylesheet" href="../../ladding page/styles/fonts.css">
                <link rel="stylesheet" href="../../ladding page/styles/media.css">

            
            </head>
   
        <body>
        <div class="main-login">
            <div class="left-login">
                <a href="../index.php" class="logoanima"><h1>My<span>Finanças</span></h1></a>
                <h1 class="hq" id="hq"> Faça sua contabilidade</h1>
                
                <img src="../img/money.svg" class="left-login-image" alt="money">
            </div>
            <div class="right-login">
                <div class="card-login">
                    <h1 class="name-class"> Juros Simples </h1>
                    <div class="textfield">
                        <label for="capital">Seu capital (Seu dinheiro)</label>
                        <input type="number" class="cinza" name="capital" id="capital" placeholder="Seu capital" required>
                    </div>
                    <div class="textfield">
                        <label for="taxa">Taxa de Juros</label>
                        <input class="cinza" type="number" name="taxa" id="taxa" placeholder="Taxa" required>
                    </div>
                    <div class="textfield">
                        <label> Meses a pagar</label>
                        <input class="cinza" type="number" name="meses" id="meses" placeholder="Meses a pagar" required>
                        <h1> <span class="bottomtext" >Através de suas informações calcularemos por você :)</span></h1>

                            <div class="actioncard">
                    </div>
                <!--<button class="btn-login">Ver</button> -->
                    <input class="btn-login" type="submit" value="Ver" id="btn-login" onclick="vendo()">
                    <label>Seu montante é: </label>
                    <!--<p class="pjuros">Seu montante é: </p> -->
                     <p id="montantemo" class="pjurosresul">R$ 0,00</p>
                </div>
               
             
            </div>
            </div>
            <!--
            <p id="capitalmo"></p> 
            <p id="taxamo"></p>
            <p id="mesesmo"></p> 
            -->   
          
            
            </div>
        </div>
        </body>
    </html> 
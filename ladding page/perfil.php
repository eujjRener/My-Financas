<?php
 session_start();
 //print_r($_SESSION);

 if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

 if((isset($_SESSION['email']) == false) )
 {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location:index.php');
 }

 $logado = $_SESSION['email'];
 $email_in = $_SESSION['email'];
 $email = "";
 $email_grande = "";
 $email_medio = "";
 $letras = strlen($email_in);
 if ($letras <18)
 {
    $email = $email_in;
 }
 if (($letras <25) and ($letras > 17))
 {
    $email_medio = $email_in;
 }
 if ($letras > 24)
 {
    $email_grande = $email_in;
 }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../home/img/Custom-Icon-Design-Flatastic-11-Cash.ico" type="image/x-icon">
    <title> MyFinanças - Seu perfil</title>
    <link rel="stylesheet" href="style.css">
    <link href="styles/fonts.css" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet">
   
    <link rel="stylesheet" href="./styles/media.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


                <style>
                  @import url('https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap');
                  @import url('https://fonts.googleapis.com/css2?family=Nunito&family=Signika+Negative:wght@700&display=swap');
            
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

               .card-prfl{
                 background-color: rgb(26, 151, 74);
                 margin-left: 32%;
                 margin-top: 05%;
                 border-radius: 30%;
                 width: 400px;
                 height: 400px;
                
               }
               .name{
                margin-left: 35%;
                color: rgb(0, 0, 0);
                font-family: 'Nunito', sans-serif;
                font-family: 'Signika Negative', sans-serif;


               }

               .foto-perfil{
                margin-left: 32%;
                margin-top: 10%;
                border-radius: 50%;
                

               }
               .email{
                color: black;
                margin-left: 10%;
                font-size: 20pt;
                font-family: 'Nunito', sans-serif;
                font-family: 'Signika Negative', sans-serif;

               }
               .email-box{
              
                color: rgb(34, 31, 31);
                border-radius: 10%;
                font-size: 17pt;
                margin-left: 10pt;
                margin-top: 01%;
                font-family: 'Nunito', sans-serif;
                font-family: 'Signika Negative', sans-serif;
               }
               .email-box-medio{
              
              color: rgb(34, 31, 31);
              border-radius: 10%;
              font-size: 15pt;
              margin-left: 10pt;
              margin-top: 03%;
              font-family: 'Nunito', sans-serif;
              font-family: 'Signika Negative', sans-serif;
             }
             .email-box-grande{
              
              color: rgb(34, 31, 31);
              border-radius: 10%;
              font-size: 9pt;
              margin-left: 10pt;
              margin-top: 8%;
              font-family: 'Nunito', sans-serif;
              font-family: 'Signika Negative', sans-serif;
             }

               .box-escolha{
                display: flex;
                margin-left: 15%;
                color: rgb(0, 0, 0);
                font-family: 'Nunito', sans-serif;
                font-family: 'Signika Negative', sans-serif;
                font-size: 20px;

                
               }
               .box-escolha :hover{
                color: black;

                
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

h1{
    font-weight: 200;
}

main{
    display: flex;
    flex-direction: row;
    margin-top: 50px;
}


span{
    color: rgb(26, 151, 74);
}

p{
    line-height: 20px;
    max-width: 500px;
    font-family: poppinslight;
}



form{
    display: flex;
    flex-direction: column;
    width: 70%;
}

form [type="submit"]{
    height: 50px;
    width: 50%;
    background-color: rgb(26, 151, 74);
    color: white;
    font-weight: bold;
}
form [type="submit"]:hover{
    cursor: pointer;
}

input{
    margin-top: 20px;
    height: 20px;
    padding: 15px;
    border-radius: 20px;
    border: none;
    font-size: 15px;
}
button{
    margin-top: 20px;
    height: 20px;
    padding: 15px;
    border-radius: 20px;
    border: none;
    font-size: 15px;
    height: 50px;
    width: 50%;
    background-color: rgb(26, 151, 74);
    color: white;
    font-weight: bold;
}
  </style>
</head>
<body>
            <?php 
                if (isset($_GET['msg'])) {
                    $msg = $_GET['msg'];
                     switch ($msg) {
                        case 2:
                        echo '<script>swal("Bem-vindo de volta,", " Ao MyFynanças seu auxiliar financeiro para não financeiros!");
                        </script>';
                        break;
                        case 3:
                           echo '<script> swal("Bem vindo!", "Obrigado por se cadastrar!", "success");
                           </script>';
                        break;

                    }

                }
            ?>
  <header>
    <div id="title">
        <h1>My<span>Finanças</span></h1>
    </div>

    <ul>
        <a href="../home/index.php"><li>Início</li></a>
        <a href="../home/teste-calculos.php"><li>Faça sua contabilidade</li></a>
        <a href="../home/albumNews.php"><li>Notícas</li></a>
        <a href="#"><li>Sobre</li></a>
        <a href="#"><li>Contato</li></a>
        <a href="../home/index.php" id="inscreva-se-btn"><li>Entrar</li></a>
     <!--   <a href="#" id="inscreva-se-btn"><li>Cadastrar</li></a> -->
    </ul>
</header>

    <div class="card-prfl">
      <img class="foto-perfil" src="../home/img/perfil.jpg" width="140px" height="140px">
      <!-- <h2 class="name">Ricardo</h2> -->
       <div style="display:flex;">
       <span class="email"><br>Email:</span> <span class="email-box"><br><?php echo $email ?></span><span class="email-box-medio"><br><?php echo $email_medio ?></span><span class="email-box-grande"><br><?php echo $email_grande ?></span>
       </div>
       <br><br>
       <div class="box-escolha">
         <a href="sair.php" style="margin-left: 10% ;">Sair</a> <a style="margin-left: 30% ;" href="../home/index.php">Entrar</a>
       </div>
    </div>
</body>
</html>
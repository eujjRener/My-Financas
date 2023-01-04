<?php  
session_start();
include "config.php";
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles/style.css" rel="stylesheet">
    <link href="./styles/fonts.css" rel="stylesheet">
    
   
    <link rel="stylesheet" href="./styles/media.css">
    <link rel="shortcut icon" href="../home/img/Custom-Icon-Design-Flatastic-11-Cash.ico" type="image/x-icon">
    <title><?php echo $title ; ?></title>

    <style>
       body{
    background-color: rgb(34, 34, 34);
    color: white;
    font-family: poppinsregular;
    max-width: 1200px;
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

h2{
    font-size: 56px;
    line-height: 10px;
    font-family: poppinsmedium;
}

span{
    color: rgb(26, 151, 74);
}

p{
    line-height: 20px;
    max-width: 500px;
    font-family: poppinslight;
}

img{
    width: 580px;
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
.msg_error
{
    background-color: rgb(163, 40, 40);
    border-radius: 20px;
    height: 20 px;
    padding: 15px;
    margin-top: 10px;

}

    </style>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
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
            <a href="cadastrar.php" id="inscreva-se-btn"><li>Cadastrar</li></a>
        </ul>
    </header>

    <main>
        <aside>
            <h2><span>Entrar no MyFinanças</span></h2>
           
            <p>
                Bem vindo novamente
            </p>
            <form name="cadusu" method="post" action="testLogin.php">
                
                <input type="email" name="txtemail" placeholder="E-mail" required>
                <input type="password" name="txtsenha" placeholder="Senha" required>
                <input type="submit" id="submit" name="submit" value="Enviar " required>
               <!-- <button onclick="window.location.href='index.html'">Não tem uma conta?</button> -->
                <span>
                    <?php 
                        if (isset($_GET['msg'])) {
                            $msg = $_GET['msg'];
                            switch ($msg) {
                                case 1:
                                    echo "<div class='msg_error'><span style='color:white; font-size:28px;'>Erro ao logar!</span><div>";
                                    echo '<script> swal("Algo deu errado!", "E-mail ou(e) senha incorreto(s)!", "error") </script>';
                            }

                        }
                     ?>
                </span>
               <br>
               <a href="cadastrar.php" style="margin-left: 10px ;">Não tem uma conta?</a>
            </form>
        </aside>

        <article>
            <img src="./components/images/money.png" alt="mooney">
        </article>
    </main>
    
</body>
</html>
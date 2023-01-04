<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles/style.css" rel="stylesheet">
    <link href="./styles/fonts.css" rel="stylesheet">
   
    <link rel="stylesheet" href="./styles/media.css">
    
    <title>Entre</title>

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

    </style>
</head>
<body>
    <header>
        <div id="title">
            <h1>My<span>Finanças</span></h1>
        </div>

        <ul>
            <a href="../MyFinanças/MyFinanças v1.5/index.html"><li>Início</li></a>
            <a href="../MyFinanças/MyFinanças v1.5/teste-calculos.html"><li>Faça sua contabilidade</li></a>
            <a href="../MyFinanças/MyFinanças v1.5/albumNews.html"><li>Notícas</li></a>
            <a href="#"><li>Sobre</li></a>
            <a href="#"><li>Contato</li></a>
            <a href="#" id="inscreva-se-btn"><li>Entrar</li></a>
         <!--   <a href="#" id="inscreva-se-btn"><li>Cadastrar</li></a> -->
        </ul>
    </header>
</body>
</html>

<?php
 session_start();
 //print_r($_SESSION);

 if((isset($_SESSION['email']) == false) and (isset($_SESSION['senha']) == false))
 {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location:index.php');
 }

 $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <h1>Bem-Vindo</h1>
    <?php
     echo $logado;
    ?>
    <a href="sair.php" style="margin: 20px;">Sair</a>
    <a href="../MyFinanças/MyFinanças v1.5/index.html" style="margin: 05px;">Entrar</a>
</body>
</html>
<?php
  session_start();
//print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['txtemail'])  && !empty($_POST['txtsenha']))
{
    //acessa
    include_once('config.php');
    $email = $_POST['txtemail'];
    $senha = $_POST['txtsenha'];
    
    $sql = "SELECT * FROM usuario WHERE EMAIL_USU = '$email'";
    $sql_exe = $conn->query($sql) or die($conn->error);

    $usuario = $sql_exe->fetch_assoc();

    if(password_verify($senha, $usuario['SENHA_USU']))
    {
    $_SESSION['email'] = $email;
    header('location:perfil.php?msg=2');
    }
    else
    {
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
      header('location:index.php?msg=1');
    }
 
}

else
{
    // não acessa
    header('location:index.php');
}

  



/*
   //acessa
   include_once('config.php');
   $email = $_POST['txtemail'];
   $senha = $_POST['txtsenha'];
   
   $sql = "SELECT * FROM usuario WHERE EMAIL_USU = '$email' AND SENHA_USU = '$senha'";

   $result = $conn->query($sql);

  // print_r($sql);
 //  print_r($result);

 if (mysqli_num_rows($result) < 1)
 {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location:index.php');
 }
 else
 {
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header('location:perfil.php');
 }

 */
?>



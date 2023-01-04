<?php
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'myfinanca';

$conn = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conn->connect_errno)
{
  #echo "Erro";
}
 else
 {
    #echo "Sucesso!";
 }

 $title = "MyFinanças - Seu auxiliar financeiro!";
 $url = "";
?>
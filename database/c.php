<?php


$dbHost = 'Localhost';
$dbUsername ='root';
$dbPassword  = '';
$dbName = 'gerenciamento';

$conexao = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);

    $nome = $_POST['nomel'];  
   $email = $_POST['email']; 
    $telefone = $_POST['telefone'];
   $genero =  $_POST['genero']; 
   $data_contrato = $_POST['data_contrato'];
   $endereco = $_POST['endereco'];
   $servicos = $_POST['servicos'];

   $result = mysqli_query($conexao,"INSERT INTO  clientes(nomel,email,telefone,genero,data_contrato,
   endereco,servicos)
   VALUES ('$nome','$email','$telefone','$genero','$data_contrato','$endereco','$servicos')");


?>
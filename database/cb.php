<?php

$dbHost = 'Localhost';
$dbUsername ='root';
$dbPassword  = '';
$dbName = 'gerenciamento';

$conexao = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);

    $nome = $_POST['nome'];  
   $email = $_POST['email']; 
    $telefone = $_POST['telefone']; 
   $endereco = $_POST['endereco'];
   $servicos = $_POST['servicos'];

   $result = mysqli_query($conexao,"INSERT INTO  fornecedores(nome,email,telefone,endereco,servicos)
   VALUES ('$nome','$email','$telefone','$endereco','$servicos')");


?>
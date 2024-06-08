<?php

$dbHost = 'Localhost';
$dbUsername ='root';
$dbPassword  = '';
$dbName = 'gerenciamento';

$conexao = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);


    $nome = $_POST['nome'];  
   $email = $_POST['email']; 
    $telefone = $_POST['telefone'];
   $genero =  $_POST['genero']; 
   $data_contratacao = $_POST['data_contratacao'];
   $endereco = $_POST['endereco'];
   $Departamento = $_POST['Departamento'];
   $cargo = $_POST['cargo'];
   $salario = $_POST['salario'];


   $result = mysqli_query($conexao,"INSERT INTO  funcionarios(nome,email,telefone,genero,data_contratacao,
   endereco,Departamento,cargo,salario)
   VALUES ('$nome','$email','$telefone','$genero','$data_contratacao','$endereco','$Departamento','$cargo',
   '$salario')");


?>



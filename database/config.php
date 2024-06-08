<?php
// Conectar ao banco de dados (substitua com suas credenciais)
$conexao = new mysqli("localhost", "root", "", "gerenciamento");

// Verificar se a conexão foi bem-sucedida
if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os dados do formulário
    
   $Nome = $_POST['Nome'];  
   $Senha = $_POST['Senha']; 
   $niveis = $_POST['niveis']; 

    // Consulta SQL para verificar o usuário e senha
    $consulta = "SELECT * FROM loginn WHERE Nome = '$Nome' AND Senha = '$Senha' AND niveis = '$niveis'";
    $resultado = $conexao->query($consulta);

    // Verificar se o resultado tem pelo menos uma linha (usuário autenticado)
    if ($resultado->num_rows > 0) {
       // echo"Login bem-sucedido!";
        //echo "alert('login');";
        
        header('location: ../views/painel.php'); 
      
    } 
    
    else {
        echo "Usuário ou senha incorretos!";
    }
    
}

       
// Fechar a conexão com o banco de dados
$conexao->close();
?>



<?php
// Carregar a configuração do banco de dados
require_once 'config/database.php';

// Iniciar a sessão
session_start();

// Verificar se o formulário de login foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['Nome'];
    $password = $_POST['Senha'];
    $role = $_POST['niveis'];

    // Consulta para verificar as credenciais do usuário
    $sql = "SELECT * FROM loginn WHERE Nome='$username' AND Senha='$password' AND niveis='$role'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuário encontrado, definir variáveis de sessão
        $_SESSION['Nome'] = $username;
        $_SESSION['niveis'] = $role;

        // Redirecionar com base no papel do usuário
        if ($role == 'Director geral') {
            header("Location:views/admin/dashboard.php");
        } else if ($role == 'Secretaria' || $role == 'Contabilista') {
            header('Location:views/user/dashboard.php');
        }
        exit;
    } else {
        $error = "Nome de usuário ou senha inválidos.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/index.css">
    <title>gestão msf | login</title>
</head>

<body>
    <div class="main">
        <div class="main-section-left">
            <form action="./index.php" method="POST">
                <h1>Entrar</h1>
                <label for="Nome">
                    Nome
                    <input type="text" name="Nome" id="Nome" class="inputUser" required placeholder="Digite o seu nome">
                </label>
                <label for="Senha" class="senha">
                    Senha
                    <input type="password" name="Senha" id="Senha" class="inputUser" required placeholder="Digite a sua senha">
                </label>
                <label for="niveis" class="nivel">
                    Seleciona o nível de acesso
                    <select name="niveis" id="niveis" required>
                        <option disabled selected value>Click aqui para selecionar</option>
                        <option value="Director geral" name="niveis">Director geral</option>
                        <option value="Contabilidade" name="niveis">Contabilista</option>
                        <option value="Secretaria" name="niveis">Secretaria(o)</option>
                    </select>
                </label>
                <button>Enviar</button>
            </form>
        </div>
        <div class="main-section-right">
            <div class="container-title">
                <h3>Bem-vindo ao sistema de gestão</h3>
                <h2>MSF LIMITADA</h2>
            </div>
        </div>
    </div>
</body>

</html>
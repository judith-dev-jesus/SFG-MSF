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
            <form action="./database/config.php" method="POST">
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
                        <option value="Direitor_geral" name="niveis">Director geral</option>
                        <option value="Assistente_contabilidade" name="niveis">Contabilista</option>
                        <option value="Secretaria_executiva" name="niveis">Secretaria(o)</option>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO DE FORNECEDORES DE BENS E SERVIÇOS</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20,147,220),rgb(17,54,71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
            width: 40%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputbox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 5px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_contrato{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0,92,197),rgb(90,20,220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0,80,172),rgb(80,19,195));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="../database/cb.php" method="post">
            <fieldset>
                <legend><b>CADASTRO DE FORNECEDORES</b></legend> <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div><br>
                <div class="inputbox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email"  class="labelInput">Email</label>
                </div><br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone"  class="labelInput">Telefone</label>
                </div><br>
                <div class="inputbox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required><br>
                    <label for="endereco"  class="labelInput">Endereço</label>
                </div><br> <div class="inputbox"><label for="servicos">Servicos</label>
                    <select name="servicos" id="servicos">
                        <option value="manutencao" name="Servicos">Manutencao de equipamentos</option>
                        <option value="alimentacao" name="Servicos">Alimentacao</option>
                        <option value="eletricidade" name="Servicos">eletricidade</option>
                        <option value="limpeza" name="Servicos">Limpeza</option>
                        <option value="informatica" name="Servicos">Informatica</option>
                        <option value="redes" name="Servicos">Redes de computadores</option>
                    </select>
                </div><br>
                <input type="submit" name="submit" id="submit">               
            </fieldset>
        </form>

    </div>
</body>
</html>
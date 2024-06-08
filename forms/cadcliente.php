
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO DE CLIENTES</title>
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
            width: 30%;
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
        <form action="../database/c.php" method ="post">
            <fieldset>
                <legend><b>CADASTRO DE CLIENTES</b></legend> <br>
                <div class="inputbox">
                    <input type="text" name="nomel" id="nomel" class="inputUser" required>
                    <label for="nomel" class="labelInput">Nome completo</label>
                </div><br>
                <div class="inputbox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email"  class="labelInput">Email</label>
                </div><br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone"  class="labelInput">Telefone</label>
                </div><br>
                <p>GENERO</p>
                <label for="femenino">Femenino</label>
                    <input type="radio" id="femenino" name="genero" value="femenino" required><br>
                    <label for="masculino">Masculino</label>
                    <input type="radio" id="masculino" name="genero" value="masculino" required><br>
                    <label for="outro">Outro</label>
                    <input type="radio" id="outro" name="genero" value="outro" required><br><br>
                    <label for="data_contrato"><b>Data de contrato:</b></label>
                    <input type="date" name="data_contrato" id="data_contrato" required><br><br>
                   
                
                <div class="inputbox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required><br>
                    <label for="endereco"  class="labelInput">Endereço</label>
                </div><br>
                <div class="inputbox"><label for="servicos">Servicos</label>
                    <select name="servicos" id="servicos">
                        <option value="Auditoria" name="Servicos">Auditoria</option>
                        <option value="contabilidade" name="Servicos">Contabilidade</option>
                        <option value="fiscalidade" name="Servicos">Fiscalidade</option>
                    </select>
                </div><br>
                <input type="submit" name="submit" id="submit">               
            </fieldset>
        </form>

    </div>
</body>
</html>
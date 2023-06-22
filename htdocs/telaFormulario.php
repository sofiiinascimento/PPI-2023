<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: aliceblue;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(94, 97, 102, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            min-width: 350px;
            max-width: 900px;
        }
        fieldset{
            border: 3px solid white;
        }
        legend{
            border: 1px solid white;
            padding: 10px;
            text-align: center;
            background-color: azure;
            border-radius: 8px;
        }
        .inputBox{
            color: white;
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
            letter-spacing: 1px;
        }
        .inputSexo{
            color: white;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput, .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: black;
        }
        #dataNascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 14px;
        }
        #data{
            color: white;
        }
        #submit{
            background-color: white;
            width: 100%;
            border: none;
            padding: 15px;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-color: rgb(233, 232, 232);
        }
    </style>
</head>
<body>
    <a href="home.php">Home</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário do usuário</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>

                <div class="inputSexo">
                    <p class="inputSex">Sexo</p>
                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label class="inputSex" for="feminino">Feminino</label>
                    <br>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label class="inputSex" for="masculino">Masculino</label>
                </div>

                <br><br>

                <label for="dataNascimento" id="data"><b>Data de nascimento:</b></label>
                <input type="date" name="dataNascimento" id="dataNascimento" required>
        
                <br><br><br>

                <input type="submit" name="submit" id="submit" >

            </fieldset>
        </form>
    </div>
</body>
</html>
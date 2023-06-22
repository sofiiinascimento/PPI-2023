<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: aliceblue;
        }
        .telaLogin{
            background-color: grey;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: aquamarine;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: black;
            font-size: 15px;
            cursor: pointer;
        }
        .inputSubmit:hover{
            background-color: cadetblue;
            color: white;
        }
    </style>
</head>
<body>
    <a href="home.php">Home</a>
    <div class="telaLogin">
        <h1>Login</h1>
        <form action="testeLogin.php" method="POST">
            <input type="text" name= "email" placeholder="Login">
            <br> <br>
            <input type="password"  name= "senha" placeholder="Senha">
            <br> <br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
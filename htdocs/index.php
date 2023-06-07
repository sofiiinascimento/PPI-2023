<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,body{
            min-width: 100vh;
        }
        body{
            display: flex;
            justify-content: center;

        }
    </style>
</head>
<body>
    <fieldset>
    <form action="imc.php" method="get">
        <label for="peso">Informe o peso:</label>
        <input type="text" name="peso" placeholder="Peso">
        <label for="altura">Informe a altura</label>
        <input type="text" name="altura" placeholder="Altura">
        <input type="submit" value="Calcular">
    </form>
    </fieldset>
</body>
</html>


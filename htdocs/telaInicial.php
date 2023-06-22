<!DOCTYPE html>
<html>
<head>
  <title>Toolbar com Botão de Sair</title>
  <style>
    /* Estilos para a toolbar */
    .toolbar {
      background-color: #f2f2f2;
      padding: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    .toolbar ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }
    
    .toolbar li {
      display: inline-block;
      margin-right: 10px;
    }
    
    .toolbar a {
      color: #333;
      text-decoration: none;
      padding: 5px 10px;
      border-radius: 3px;
      transition: background-color 0.3s ease;
    }
    
    .toolbar a:hover {
      background-color: #ddd;
    }
    
    /* Estilos para o botão de sair */
    .exit-button {
      background-color: #f44336;
      color: white;
      padding: 5px 10px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      font-size: 20px;
      font-family: Arial, Helvetica, sans-serif;
      margin-right: 50%;
    }
    
    .exit-button:hover {
      background-color: #d32f2f;
    }
  </style>
</head>
<body>
  <div class="toolbar">
    <ul>
      <li><a href="home.php">Home</a></li>
      <a class="exit-button" href="telaLogin.php" >Sair</a>
    </ul>
  </div>
  
  
  
</body>
</html>

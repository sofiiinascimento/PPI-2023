<?php
    include_once "conexao.php";
    conectaBD();
  
    $email = $_POST['email'];
    $senha = $_POST['senha'];
       
    if (verificarCredenciais($email, $senha)){
      session_start();
      $_SESSION['email'] = $email;
            
      header("Location: telaInicial.php");

    }else {
      header('Location:telaLogin.php');
    }
?>
<?php
if (!$_POST['nome'] || !$_POST['senha']){
    header('Location: telaLogin.html');
    exit;
}
// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    // Verificar se o usuário e a senha estão corretos (exemplo fictício)
    if ($username === "nome" && $password === "senha") {
        // Login bem-sucedido
        echo "Login realizado com sucesso!";
    } else {
        // Login falhou
        echo "Nome ou senha incorretos!";
    }
}
?>

<?php
// Supondo que você esteja usando a extensão mysqli para se conectar ao banco de dados
$conexao = new mysqli("localhost:3306", "root", "", "realsenseweb");

// Verificar a conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

// Evite a injeção de SQL usando instruções preparadas
$sql = "INSERT INTO cadastro (nome, cpf, email, senha) VALUES (?, ?, ?, ?)";
$stmt = $conexao->prepare($sql);

// Verificar se a preparação foi bem-sucedida
if ($stmt === false) {
    die("Erro na preparação da consulta: " . $conexao->error);
}

// Vincular parâmetros
$stmt->bind_param("ssss", $nome, $cpf, $email, $senha);

// Definir valores
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

// Executar a consulta
if ($stmt->execute()) {
    echo "<!DOCTYPE html>
    <html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
        <link rel='stylesheet' href='../css/cadastro.css'>
    </head>
    <body>
    <center>
    <br>
    <br>
    <br>
        <h1 style='color:#40b646'>CADASTRADO COM SUCESSO!</h1> 
        <br>
        <a href='login.php'><button style='display:block;'><h2>Login</button></a>
    </center>
    </body>
    </html>";
    
} else {
    die("Erro na execução da consulta: " . $stmt->error);
}

// Fechar a declaração e a conexão
$stmt->close();
$conexao->close();
?>
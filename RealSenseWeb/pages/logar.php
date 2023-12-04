<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Substitua as informações do banco de dados conforme necessário
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $dbname = "realsenseweb";

    // Cria uma conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Obtém os dados do formulário
    $login = $_POST['email'];
    $senha = $_POST['senha'];

    // Evite a injeção de SQL usando instruções preparadas
    $stmt = $conn->prepare("SELECT * FROM cadastro WHERE email = ? AND senha = ?");
    
    // Verifica se a preparação foi bem-sucedida
    if ($stmt === false) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    // Vincula os parâmetros
    $stmt->bind_param("ss", $login, $senha);

    // Executa a consulta
    $stmt->execute();

    // Armazena o resultado da consulta
    $result = $stmt->get_result();

    // Verifica se há um usuário correspondente
    if ($result->num_rows > 0) {
        header('Location: ../rsw1/rsw_index.html');
    } else {
        echo "<h3>Login falhou. Verifique suas credenciais.</h3>";
    }

    // Fecha a declaração
    $stmt->close();
    // Fecha a conexão
    $conn->close();
}
?>

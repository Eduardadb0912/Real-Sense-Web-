<?php

require_once("conecta.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$sql = mysqli_query($conn, "INSERT INTO contato (nome, email, mensagem)
    VALUES ('$nome', '$email', '$mensagem')");

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href=''>
    <title>Document</title>
</head>
<body class='main'>
    <h1 class='text'>Obrigado pelo contato</h1>
    <p class='paragrafo'>Em breve entrarei em contato  </p>
    <a href='pag_inicial.html' class='btn'>Home</a>
</body>
</html>";

?>
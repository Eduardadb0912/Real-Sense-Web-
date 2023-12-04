<?php


if (isset($_POST['submit']))
{


  require_once("conecta.php");

 
  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $cpf = $_POST['cpf'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  
  $sql = mysqli_query($conn, "INSERT INTO cadastro (nome, sobrenome, cpf, email, senha)
  VALUES ('$nome', '$sobrenome', '$cpf', '$email', '$senha')");

}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/Login.css">
</head>
<body>
    
    <div class="container">
        <div class="main"> 
            <div class="h1">
                <h1 style="color:#40b646">Login</h1>
            </div>
            <div class="login">
                <form class="form" action="logar.php" method="POST">
                    <input class="input" type="email" name="email" placeholder="Email" required>

                    <div class="password-container">
                        <input class="input" type="password" name="senha" id="senhaInput" placeholder="Password" required>
                        <input type="checkbox" id="mostrarSenha">
                        <label for="mostrarSenha" class="checkbox-label"></label>
                    </div>
                    
                    <button>Login</button> 
                    <a href="cadastro_novo.html">Cadastrar</a>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="main.js"></script>
</html>

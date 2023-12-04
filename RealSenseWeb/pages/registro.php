<?php


if (isset($_POST['submit']))
{


  require_once("conecta.php");

 
  $tipo = $_POST['tipo'];
  $nome = $_POST['nome'];
  $saldo = $_POST['saldo'];
  
  
  
  $sql = mysqli_query($conn, "INSERT INTO registro (tipo, nome, saldo)
  VALUES ('$tipo', '$nome', '$saldo')");


    header("Location: registro.php");
    exit();

  // SELECT Lista de contas
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Contas Financeiras</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <header>
        <nav>
          <a><img src="../src/Real_bg.png" class="img1"></a>
          <a class="logo" href="pag_inicial.html">Real Sense Web</a>
          <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
          </div>
          <ul class="nav-list">
            <li><a href="financas.html">Educação</a></li>
            <li><a href="registro.html">Registro Contas</a></li>
            <li><a href="planejamento.html">Orçamento</a></li>
            <li><a href="rastreamento.html">Gastos</a></li>
            <li><a href="financias.html">Calculadoras</a></li>
            <li><a href="login.php">Perfil</a></li>
          </ul>
         
        </nav>
      </header>
    <div id="form-container">
        <h2>Adicionar Conta</h2>
        <form method="POST" action="registro.php">
            <label for="account-type">Tipo de Conta:</label>
           
            <select id="account-type" name="tipo" required>
              <option value="conta-bancaria">Conta Bancária</option>
              <option value="cartao-credito">Cartão de Crédito</option>
              <option value="outro-ativo">Outro Ativo Financeiro</option>
            </select>

            <label for="account-name">Nome da Conta:</label>
            <input type="text" name="nome">

            <label for="account-balance">Saldo Inicial:</label>
            <input type="number" name="saldo">

            <input type="submit" name="submit" value="Registrar">
        </form>
    </div>

     <div id="account-list">
     <table border="4"> 
     
      <h2>Lista de Contas</h2>
      <tr>
        <td>Tipo</td>
        <td>Nome</td>
        <td>Saldo</td>            
      </tr>
        <ul>
        <?php
            require("conecta.php");
            $dados_select = mysqli_query($conn, "SELECT tipo, nome , saldo FROM registro");
            // echo "<form action='registro.php' method='post'>";
            while($dado = mysqli_fetch_array($dados_select)) {
                    echo '<tr>';
                    echo '<td>'.$dado[0].'</td>';
                    echo '<td>'.$dado[1].'</td>';
                    echo '<td>'.$dado[2].'</td>';
                    // echo "<td><input type='submit' name=enviar[".$dado[7]."] value='Resolver'> "."</td>";
                    echo '</tr>';
            }
            ?>
        </ul>
      </div>
      </table>



    <script src="../src/script.js"></script>
</body>
</html>

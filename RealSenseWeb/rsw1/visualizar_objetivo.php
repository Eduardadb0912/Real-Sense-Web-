<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vizualizar_objetivo.css">
    <title>Visualizar Objetivo</title>
</head>
<body>
<header>
        <a href="#" class="logo"><img src="../src/Real_bg.png"></a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="form_gasto.php">Cadastrar gasto</a></li>
            <li><a href="form_objetivo.html">Cadastrar objetivo</a></li>
            <li><a href="form_divida.html">Cadastrar Divida</a></li>
            <li><a href="visualizar_divida.php">Vizualizar Dividas</a></li>
            <li><a href="visualizar_deposito_objetivo.php">Vizualizar Deposito Objetivo</a></li>
            <li><a href="visualizar_objetivo.php">Vizualizar Objetivo</a></li>
            <li><a href="visualizar_gasto.php">Vizualizar Gastos</a></li>
        </ul>
    </header>
  </br>
  </br>
  </br>
  </br>
    <center>
        <h1>OBJETIVOS</h1>

        <table border="4">
            <tr>
                <td>DESCRIÇÃO</td>
                <td>VALOR NECESSÁRIO</td>
                <td>DATA PREVISTA</td>
                
            </tr>
            <?php
                require("conecta.php");

                $dados_select = mysqli_query($conn, "SELECT DESCRICAO, VALOR_NECESSARIO, DATA_PREVISTA FROM objetivo");
                while($dado = mysqli_fetch_array($dados_select)) {
                        echo '<tr>';
                        echo '<td>'.$dado[0].'</td>';
                        echo '<td>'.$dado[1].'</td>';
                        echo '<td>'.$dado[2].'</td>';
                        echo '</tr>';
                }
                echo "</form>";
            ?>
        </table>
        <br />
        <a href="rsw_index.html"><input type="button" value="Voltar"></a>
    </center>
</body>
</html>
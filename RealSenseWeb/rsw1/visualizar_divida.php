<!DOCTYPE html>
<html lang="pt-be">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../rsw1/vizualizar_divida.css">
    <title>Visualizar Dívidas</title>
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
    <center>
</br>
</br>
</br>

        <h1>DIVIDAS</h1>

        <table border="4">
            <tr>
                <td>NOME DIVIDA</td>
                <td>VALOR DA DIVIDA</td>
                
            </tr>
            <?php
                require("conecta.php");

                $dados_select = mysqli_query($conn, "SELECT NOME_DIVIDA, VALOR FROM gestao_divida");
                while($dado = mysqli_fetch_array($dados_select)) {
                        echo '<tr>';
                        echo '<td>'.$dado[0].'</td>';
                        echo '<td>'.$dado[1].'</td>';
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
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../rsw1/form_gasto.css">
    <title>Cadastra Gasto</title>
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
        <h1>CADASTRO DE GASTOS</h1>
        <form method="POST" action="cadastra_gasto.php">
            <table>
                <tr>
                    <div class="inputcontainer">
                        <td>DESCRIÇÃO: <input type="text" name="descricao_gasto"></td>
                        <td>VALOR: <input type="number" name="valor_gasto"></td>
                    </div>
                </tr>  
                <tr> 
               
                    <?php

                        date_default_timezone_set("America/Sao_Paulo");
                        $hoje = date('d/m/Y'); 
                        echo $hoje;

                        require("conecta.php");

                
                        $dados_select = mysqli_query($conn, "SELECT ID_CATEGORIA, NOME_CATEGORIA FROM CATEGORIA");
                        echo "<td>CATEGORIA: <select name='categoria_gasto'>";
                        while($dado = mysqli_fetch_array($dados_select)) {
                            echo '<option   value='.$dado[0].'>'.$dado[1].'</option>';
                        }
                        echo "</select></td>";

                        $dados_select = mysqli_query($conn, "SELECT ID_TIPO_GASTO, TIPO_GASTO FROM TIPO_GASTO");
                        echo "<td>TIPO: <select name='tipo_gasto'>";
                        while($dado = mysqli_fetch_array($dados_select)) {
                            echo '<option   value='.$dado[0].'>'.$dado[1].'</option>';
                        }
                        echo "</select></td>";
                    ?>

                </tr>
            </table>
            <input class="continue-button" type="submit" value="CADASTRO">
            <input class="continue-button" type="reset" value="LIMPAR">

        </form>
    </center>
</body>
</html>
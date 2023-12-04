<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vizualizar_gasto.css">
    <title>Visualização de gastos</title>
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
        <h1>CONTROLE DE GASTOS</h1>

        <table border="4">
            <tr>
                <td>ID</td>
                <td>DESCRIÇÃO</td>
                <td>VALOR</td>
                <td>ID CATEGORIA</td>
                <td>CATEGORIA</td>
                <td>ID TIPO</td>
                <td>TIPO</td>
                <td>DIA</td>
                <td>HORARIO</td>
            </tr>
            <?php
                require("conecta.php");

                $dados_select = mysqli_query($conn, "SELECT ID_GASTOS,
                                                            DESCRICAO, 
                                                            VALOR, 
                                                            CATEGORIA,
                                                            categoria.NOME_CATEGORIA ,
                                                            TIPO, 
                                                            tipo_gasto.TIPO_GASTO,
                                                            DIA_GASTO, 
                                                            HORARIO_GASTO 
                                                            FROM GASTOS
                                                            INNER JOIN categoria
                                                            ON categoria.ID_CATEGORIA = gastos.CATEGORIA    
                                                            INNER JOIN tipo_gasto
                                                            ON tipo_gasto.ID_TIPO_GASTO = gastos.TIPO 
                                                            ");

                while($dado = mysqli_fetch_array($dados_select)) {
                        echo '<tr>';
                        echo '<td>'.$dado[0].'</td>';
                        echo '<td>'.$dado[1].'</td>';
                        echo '<td>'.$dado[2].'</td>';
                        echo '<td>'.$dado[3].'</td>';
                        echo '<td>'.$dado[4].'</td>';
                        echo '<td>'.$dado[5].'</td>';
                        echo '<td>'.$dado[6].'</td>';
                        echo '<td>'.$dado[7].'</td>';
                        echo '<td>'.$dado[8].'</td>';
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
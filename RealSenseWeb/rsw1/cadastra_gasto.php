<?php
    date_default_timezone_set("America/Sao_Paulo");

    require("conecta.php");

    $descricao_gasto = $_POST['descricao_gasto'];
    $valor_gasto = $_POST['valor_gasto'];
    $categoria_gasto = $_POST['categoria_gasto'];
    $tipo_gasto = $_POST['tipo_gasto'];
    $date = date('Y-m-d');
    $time = date('H:i:s');



    $sql = "INSERT INTO gastos (descricao, valor, categoria, tipo, dia_gasto, horario_gasto)
    VALUES ('$descricao_gasto', '$valor_gasto', '$categoria_gasto', '$tipo_gasto', '$date', '$time')";

    if ($conn->query($sql) === TRUE) {
      echo "<center><h1>Registro Inserido com Sucesso</h1>";
      echo "<a href='rsw_index.html'><input type='button' value='Voltar'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }

?>
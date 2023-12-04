<?php
    date_default_timezone_set("America/Sao_Paulo");

    require("conecta.php");

    $valor_deposito = $_POST['valor_deposito'];
    $data = date('Y-m-d');
    $time = date('H:i:s');

    


    $sql = "INSERT INTO deposito_objetivo (valor_deposito, data_deposito, horario_deposito)
    VALUES ('$valor_deposito', '$data', '$time')";

    if ($conn->query($sql) === TRUE) {
      echo "<center><h1>Registro Inserido com Sucesso</h1>";
      echo "<a href='rsw_index.html'><input type='button' value='Voltar'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }

?>
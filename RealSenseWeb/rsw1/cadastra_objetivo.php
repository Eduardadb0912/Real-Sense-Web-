<?php

    require("conecta.php");

    $descricao_objetivo = $_POST['descricao_objetivo'];
    $valor_objetivo = $_POST['valor_objetivo'];
    $data_prevista_objetivo = $_POST['data_prevista_objetivo'];
    


    $sql = "INSERT INTO objetivo (DESCRICAO, VALOR_NECESSARIO, DATA_PREVISTA  )
    VALUES ('$descricao_objetivo', '$valor_objetivo', '$data_prevista_objetivo')";

    if ($conn->query($sql) === TRUE) {
      echo "<center><h1>Registro Inserido com Sucesso</h1>";
      echo "<a href='rsw_index.html'><input type='button' value='Voltar'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }

?>
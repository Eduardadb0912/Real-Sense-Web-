<?php

    require("conecta.php");

    $nome_divida = $_POST['nome_divida'];
    $valor = $_POST['valor'];
    


    $sql = "INSERT INTO gestao_divida (NOME_DIVIDA, VALOR)
    VALUES ('$nome_divida', '$valor')";

    if ($conn->query($sql) === TRUE) {
      echo "<center><h1>Registro Inserido com Sucesso</h1>";
      echo "<a href='rsw_index.html'><input type='button' value='Voltar'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }

?>
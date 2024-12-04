<?php
    require("conecta.php");

    $modelo = $_POST['modelo'];
    $marca =  $_POST['marca'];
    $ano = $_POST['ano'];
    $estado = $_POST['estado'];
    $cambio = $_POST['cambio'];
    $opcional = isset($_POST['opcional']) ? implode(", ", $_POST['opcional']) : "";
    $observacoes = $_POST['observacoes'];

    

    $sql = "INSERT INTO carros ( modelo, marca, ano, estado, cambio, opcional, observacoes)
    VALUES ('$modelo', '$marca', '$ano', '$estado', '$cambio', '$opcional', '$observacoes')";

    if ($conn->query($sql) === TRUE) {
      echo "<center><h1>Registro Inserido com Sucesso</h1>";
      echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
?>
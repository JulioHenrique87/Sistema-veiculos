<?php
require("conecta.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_carros = $_POST['id_carros'];

    if (!empty($id_carros)) {
        // Query para excluir o veículo
        $sql = "DELETE FROM carros WHERE id_carros = '$id_carros'";

        if ($conn->query($sql) === TRUE) {
            echo "<center><h1>Veículo excluído com sucesso!</h1>";
            echo "<a href='index.html'><input type='button' value='Voltar a página inicial'></a></center>";
        } else {
            echo "<center><h3>Erro ao excluir veículo: </h3>" . $conn->error . "<br>";
            echo "<a href='excluir_carro.html'><input type='button' value='Tentar novamente'></a></center>";
        }
    } else {
        echo "<center><h3>ID do veículo é obrigatório!</h3>";
        echo "<a href='excluir_carro.html'><input type='button' value='Voltar'></a></center>";
    }
}
?>

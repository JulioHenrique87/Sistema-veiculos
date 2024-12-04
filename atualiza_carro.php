<?php
require("conecta.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_carros = $_POST['id_carros'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $ano = $_POST['ano'];
    $estado = $_POST['estado'];
    $cambio = $_POST['cambio'];
    $observacoes = $_POST['observacoes'];

    // Verificando se pelo menos o ID foi preenchido
    if (!empty($id_carros)) {
        // Atualizando os dados do veículo
        $sql = "UPDATE carros SET 
                    modelo = '$modelo', 
                    marca = '$marca', 
                    ano = '$ano', 
                    estado = '$estado', 
                    cambio = '$cambio', 
                    observacoes = '$observacoes'
                WHERE id_carros = '$id_carros'";

        if ($conn->query($sql) === TRUE) {
            echo "<center><h1>Registro Atualizado com Sucesso</h1>";
            echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
        } else {
            echo "<h3>Erro ao atualizar: </h3>" . $conn->error;
        }
    } else {
        echo "O ID do carro é obrigatório.";
    }
}
?>

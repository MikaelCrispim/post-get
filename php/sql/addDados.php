<?php
include "conexao.php";

$conn->select_db('POSTGET');

$valor = $_POST["value"];
$formapagamento = $_POST["formaPagamento"];
$datapagamento = $_POST["dateRegister"];
$recebidaenviada = $_POST["sacar"];

$sql = "INSERT INTO TRANSACAO (valor, formapagamento, datapagamento, recebidaenviada)
VALUES ('$valor', '$formapagamento', '$datapagamento', '$recebidaenviada')";

if ($conn->query($sql) === TRUE) {
    echo "Dados adicionados com sucesso";
} else {
    echo "<script>console.log('Erro ao adicionar dado: " . $conn->error.')</script>';   
}

$conn->close();
?>
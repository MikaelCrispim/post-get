<?php
include "conexao.php";

$valor = $_POST["Valor"];
$formapagamento = $_POST[""];
$datapagamento = $_POST[""];
$recebidaenviada = $_POST[""];

$sql = "INSERT INTO TRANSACAO (valor, formapagamento, datapagamento, recebidaenviada)
VALUES ('$valor', '$formapagamento', '$datapagamento', '$recebidaenviada')";

$conn->close();
?>

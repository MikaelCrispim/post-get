<?php
include "conexao.php";

$valor = $_POST["value"];
$formapagamento = $_POST["formaPagamento"];
$datapagamento = $_POST["dateRegister"];
$recebidaenviada = $_POST["sacar"];

$sql = "INSERT INTO TRANSACAO (valor, formapagamento, datapagamento, recebidaenviada)
VALUES ('$valor', '$formapagamento', '$datapagamento', '$recebidaenviada')";

$conn->close();
?>

<?php
include "conexao.php";

$conn->select_db('POSTGET');

$valor = $_POST["value"];
$formapagamento = $_POST["formaPagamento"];
$datapagamento = $_POST["dateRegister"];
$recebidaenviada = $_POST["sacar"];
$nome = $_SESSION['name'];

$sql = "INSERT INTO TRANSACAO (valor, formapagamento, datapagamento, recebidaenviada, nome)
VALUES ('$valor', '$formapagamento', '$datapagamento', '$recebidaenviada', '$nome')";

if ($conn->query($sql) === TRUE) {
    echo "<div class='dd'>Registro de ".
    $_SESSION['name'] . ", realizado com sucesso!";
} else {
    echo "<script>console.log('Erro ao adicionar dado: " . $conn->error.')</script>';   
}

$conn->close();
?>
<?php
include '../sql/conexao.php';

$conn->select_db('POSTGET');

$email = $_POST['email'];
$nome = $_POST['name'];
$senha = $_POST['password'];
$profissao = $_POST['profession'];

$sql = "INSERT INTO USER (email, nome, senha, profissao) VALUES ($email, $nome, $senha, $profissao)";

if ($conn->query($sql) === TRUE) {
    echo "('Conta Registrada.')";
} else {
    echo "<script>console.log('Erro ao adicionar dado: " . $conn->error.')</script>';   
}

$conn->close();
?>
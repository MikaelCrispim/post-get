<?php
include "conexao.php";

//5 Usuários e 20 transações

$dbname = "POSTGET";
$sql = "CREATE DATABASE $dbname";

if ($conn->query($sqlCreateDB) === TRUE) {
    echo "Banco de dados criado com sucesso.<br>";
} else {
    echo "Erro ao criar o banco de dados: " . $conn->error;
}

$conn->select_db($databaseName);

$sql = 'CREATE TABLE USER(
    email varchar(50),
    nome varchar(50),
    senha varchar(50),
    profissao varchar(35)
)'; 

if ($conn->query($sql) === TRUE) {
    echo "Tabela criada com sucesso.";
} else {
    echo "Erro ao criar a tabela: " . $conn->error;
}

$conn->close();
?>
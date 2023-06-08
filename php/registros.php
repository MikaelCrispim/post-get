<?php
include "conexao.php";

//5 Usuários e 20 transações

$dbName = "POSTGET";
$sql = "CREATE DATABASE $dbName";

if ($conn->query($sql) === TRUE) {
    echo "Banco de dados criado com sucesso.<br>";
} else {
    echo "Erro ao criar o banco de dados: " . $conn->error;
}

$conn->select_db($dbName);

//Tabela de Usuário
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

//Tabela de Transações
$sql = 'CREATE TABLE TRANSACAO(
    valor decimal(10,2),
    formapagamento varchar(60),
    datapagamento date,
    recebidaenviada boolean
)'; 

if ($conn->query($sql) === TRUE) {
    echo "Tabela criada com sucesso.";
} else {
    echo "Erro ao criar a tabela: " . $conn->error;   
}

//Adicionando dados na Tabela de Usuário
$sql = "INSERT INTO USER (email, nome, senha, profissao)
VALUES ('miguelbzr6@gmail.com', 'Miguel', '12345678', 'comercial'),
('miggshelly@gmail.com', 'Michele', '1423425678', 'comercial'),
('vinicius.goi@gmail.com', 'Vinicius', '1233434678', 'financeiro'),
('mikael.operacional@gmail.com', 'Mikael', '126534378', 'operacional'),
('igor.financias@gmail.com', 'Igor', '1224342112', 'financeiro'),
('jorge.adm@gmail.com', 'Jorge', '112132354', 'administrativo'),
('ana.marketing@gmail.com', 'Ana', '1275675234', 'outro')";

if ($conn->query($sql) === TRUE) {
    echo "Dados adicionados com sucesso.";
} else {
    echo "Erro ao adicionar dados: " . $conn->error;   
}

//Adicionando dados na Tabela de Transações
$sql = "INSERT INTO TRANSACAO (valor, formapagamento, datapagamento, recebidaenviada)
VALUES ('1000', 'pix', 'date('Y-m-d', strtotime('1990-05-20'))', 'TRUE'),
";

if ($conn->query($sql) === TRUE) {
    echo "Dados adicionados com sucesso.";
} else {
    echo "Erro ao adicionar dados: " . $conn->error;   
}

$conn->close();
?>
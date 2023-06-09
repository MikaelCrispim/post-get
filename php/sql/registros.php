<?php
include "conexao.php";

//5 Usuários e 20 transações

$dbName = "POSTGET";

$sql = "DROP DATABASE IF EXISTS $dbName";

if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Banco de dados deletado com sucesso.')</script>";
} else {
    echo "<script>console.log('Erro ao deletar o banco de dados: " . $conn->error.')</script>';
}

$sql = "CREATE DATABASE $dbName";

if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Banco de dados criado com sucesso.')</script>";
} else {
    echo "<script>console.log('Erro ao criar o banco de dados: " . $conn->error.')</script>';
}

$conn->select_db($dbName);

//Tabela de Usuário
$sql = 'CREATE TABLE USER(
    id INT AUTO_INCREMENT PRIMARY KEY,
    email varchar(50),
    nome varchar(50),
    senha varchar(50),
    profissao varchar(35)
)'; 

if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Tabela criada com sucesso.')</script>";
} else {
    echo "<script>console.log('Erro ao criar a tabela: " . $conn->error.')</script>';   
}

//Tabela de Transações
$sql = 'CREATE TABLE TRANSACAO(
    valor decimal(10,2),
    formapagamento varchar(60),
    datapagamento date,
    recebidaenviada boolean
)'; 

if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Tabela criada com sucesso.')</script>";
} else {
    echo "<script>console.log('Erro ao criar a tabela: " . $conn->error.')</script>';   
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
    echo "<script>console.log('Dados adicionados com sucesso.')</script>";
} else {
    echo "<script>console.log('Erro ao adicionar dados: " . $conn->error.')</script>';   
}

//Adicionando dados na Tabela de Transações
$sql = "INSERT INTO TRANSACAO (valor, formapagamento, datapagamento, recebidaenviada)
VALUES ('500', 'boleto', '2023-05-20', '1'),
('1000', 'transferecia', '2020-04-10', '0'),
('1200', 'boleto', '2022-02-15', '1'),
('1878', 'cartao', '2021-01-19', '1'),
('1950', 'pix', '2020-07-12', '0'),
('1320', 'transferecia', '2022-02-06', '0'),
('543', 'pix', '2020-05-02', '1'),
('863', 'boleto', '2023-04-05', '0'),
('1000', 'pix', '2020-01-08', '0'),
('2090', 'boleto', '2022-02-21', '1'),
('3030', 'transferecia', '2020-09-23', '1'),
('502', 'pix', '2021-03-21', '1'),
('320', 'boleto', '2021-10-14', '0'),
('101', 'cartao', '2022-08-08', '1'),
('202', 'cartao', '2022-07-05', '0'),
('403', 'boleto', '2023-02-04', '0'),
('102', 'pix', '2020-03-30', '1'),
('210', 'pix', '2021-05-12', '0'),
('981', 'cartao', '2022-10-16', '1'),
('760', 'transferecia', '2020-12-05', '0')
";

if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Dados adicionados com sucesso.')</script>";
} else {
    echo "<script>console.log('Erro ao adicionar dados: " . $conn->error.')</script>';   
}

$conn->close();
?>
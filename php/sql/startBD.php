<?php
include "conexao.php";

//5 Usuários e 20 transações

$dbName = "POSTGET";

$sql = "DROP DATABASE IF EXISTS $dbName";

if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Banco de dados deletado com sucesso.')</script>";
} else {
    echo "<script>console.log('Erro ao deletar o banco de dados: ".')</script>';
}

$sql = "CREATE DATABASE $dbName";

if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Banco de dados criado com sucesso.')</script>";
} else {
    echo "<script>console.log('Erro ao criar o banco de dados: " .')</script>';
}

$conn->select_db($dbName);

//Tabela de Usuário
$sql = 'CREATE TABLE USER(
    id INT AUTO_INCREMENT PRIMARY KEY,
    email varchar(50),
    nome varchar(50),
    senha varchar(255),
    profissao varchar(35)
)'; 

if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Tabela criada com sucesso.')</script>";
} else {
    echo "<script>console.log('Erro ao criar a tabela: " .')</script>';   
}

//Tabela de Transações
$sql = 'CREATE TABLE TRANSACAO(
    valor decimal(10,2),
    formapagamento varchar(60),
    datapagamento date,
    recebidaenviada varchar(60),
    nome varchar(50)
)'; 

if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Tabela criada com sucesso.')</script>";
} else {
    echo "<script>console.log('Erro ao criar a tabela: " .')</script>';   
}

//Adicionando dados na Tabela de Usuário
$s1 = password_hash(12345678, PASSWORD_DEFAULT);
$s2 = password_hash(1423425678, PASSWORD_DEFAULT);
$s3 = password_hash(1233434678, PASSWORD_DEFAULT);
$s4 = password_hash(126534378, PASSWORD_DEFAULT);
$s5 = password_hash(1224342112, PASSWORD_DEFAULT);
$s6 = password_hash(112132354, PASSWORD_DEFAULT);
$s7 = password_hash(1275675234, PASSWORD_DEFAULT);

$sql = "INSERT INTO USER (email, nome, senha, profissao)
VALUES ('miguelbzr6@gmail.com', 'Miguel', '$s1', 'comercial'),
('miggshelly@gmail.com', 'Michele', '$s2', 'comercial'),
('vinicius.goi@gmail.com', 'Vinicius', '$s3', 'financeiro'),
('mikael.operacional@gmail.com', 'Mikael', '$s4', 'operacional'),
('igor.financias@gmail.com', 'Igor', '$s5', 'financeiro'),
('jorge.adm@gmail.com', 'Jorge', '$s6', 'administrativo'),
('ana.marketing@gmail.com', 'Ana', '$s7', 'outro')";

if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Dados adicionados com sucesso.')</script>";
} else {
    echo "<script>console.log('Erro ao adicionar dados: ".')</script>';   
}

//Adicionando dados na Tabela de Transações
$sql = "INSERT INTO TRANSACAO (valor, formapagamento, datapagamento, recebidaenviada, nome)
VALUES ('500', 'boleto', '2023-05-20', 'Recebida', 'Miguel'),
('1000', 'transferencia', '2020-04-10', 'Enviada', 'Mikael'),
('1200', 'boleto', '2022-02-15', 'Recebida', 'Michele'),
('1878', 'cartao', '2021-01-19', 'Recebida', 'Igor'),
('1950', 'pix', '2020-07-12', 'Enviada', 'Vinicius'),
('1320', 'transferencia', '2022-02-06', 'Enviada', 'Ana'),
('543', 'pix', '2020-05-02', 'Recebida', 'Jorge'),
('863', 'boleto', '2023-04-05', 'Enviada', 'Ana'),
('1000', 'pix', '2020-01-08', 'Enviada', 'Michele'),
('2090', 'boleto', '2022-02-21', 'Recebida', 'Mikael'),
('3030', 'transferencia', '2020-09-23', 'Recebida', 'Igor'),
('502', 'pix', '2021-03-21', 'Recebida', 'Ana'),
('320', 'boleto', '2021-10-14', 'Enviada', 'Jorge'),
('101', 'cartao', '2022-08-08', 'Recebida', 'Mikael'),
('202', 'transferencia', '2022-07-05', 'Enviada', 'Miguel'),
('403', 'boleto', '2023-02-04', 'Enviada', 'Vinicius')
";

if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Dados adicionados com sucesso.')</script>";
} else {
    echo "<script>console.log('Erro ao adicionar dados: ".')</script>';   
}

$conn->close();

header("Location: ../../index.php");
?>
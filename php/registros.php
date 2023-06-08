<?php
include "conexao.php";

//5 Usuários e 20 transações

$sql = "CREATE DATABASE POSTGET;
USE DATABASE POSTGET;
CREATE TABLE USER(
    email varchar(50),
    nome varchar(50),
    senha varchar(50),
    profissao varchar(35)
);
CREATE TABLE TRANSACAO(
    valor decimal(5,2),
    formapagamento varchar(60),
    datapagamento date,
    recebidaenviada boolean
);"; 
mysqli_query($conn, $sql);
?>
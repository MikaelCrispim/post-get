<?php
include __DIR__ . '/../sql/conexao.php';

$conn->select_db('postget');

$email = $_POST['email'];
$nome = $_POST['name'];
$senha = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "SELECT email FROM USER WHERE email = '$email'";
$sql_query = $conn->query($sql) or die("Falha na execução do código SQL");
$quantidade = $sql_query -> num_rows;
if ($quantidade == 1) {
    echo "<p class ='msg'>Email já possui registro.</p>";
} else {
    $sql = "INSERT INTO USER (email, nome, senha) VALUES ('$email', '$nome', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "('Conta Registrada.')";
        header("Location: ./src/login.php"); 
    } else {
        echo "<script>console.log('Erro ao adicionar dado:)</script>";
    }

}

$conn->close();
?>
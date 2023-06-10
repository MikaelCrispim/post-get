<?php
include __DIR__.'/../sql/conexao.php';
$conn->select_db('POSTGET');

$email = $conn->real_escape_string($_POST['email_login']);
$senha = $conn->real_escape_string($_POST['password_login']);

$sql = "SELECT * FROM USER WHERE email = '$email' LIMIT 1";
$sql_query = $conn->query($sql) or die("Falha na execução do código SQL");

$usuario = $sql_query->fetch_assoc();

if(isset($usuario) && password_verify($senha, $usuario['senha'])){
    include 'sessionStart.php';

    $_SESSION['user'] = $usuario['id'];
    $_SESSION['name'] = $usuario['nome'];

    header('Location: ./registros.php');
}else{
    echo "<p class ='msg'>Falha ao logar! E-mail ou senha incorretos</p>";
}
?>
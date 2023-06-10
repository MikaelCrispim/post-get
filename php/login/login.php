<?php
$email = $mysqli->real_escape_string($_POST['email']);
$senha = $mysqli->real_escape_string($_POST['senha']);

$sql = "SELECT * FROM USER WHERE email = '$email' AND senha = '$senha'";
$sql_query = $mysqli->query($sql) or die("Falha na execução do código SQL" . $mysqli->error);

$quantidade = $sql_query -> $num_rows;

if($quantidade == 1){
    $usuario = $sql_query->fetch_assoc();

    include 'sessionStart.php';

    $_SESSION['user'] = $usuario['id'];
    $_SESSION['name'] = $usuario['nome'];
}else{
    echo 'Falha ao logar! E-mail ou senha incorretos';
}
?>
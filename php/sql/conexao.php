<?php 
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
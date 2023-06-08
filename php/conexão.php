<?php 
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysql_connect($servername, $username, $password);

if(!$conn){
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
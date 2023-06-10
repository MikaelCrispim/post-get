<?php
include 'sessionStart.php';

if(!isset($_SESSION['id'])){
    die("Faça o login para acessar a página. <p><a href =\"../index.php\">Entrar</a></p>");
}
?>
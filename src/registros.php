<?php
if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['user'])){
    die("Faça o login para acessar a página. <p><a href =\"./../index.php\">Entrar</a></p>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/registros.css">
    <title>POST E GET</title>
</head>
<body>
    <div class="form_transacoes">
        <form action="?" method="post">
            <input type="number" placeholder="Valor" name="value" step="any" min="0" required><br>
            <label>Forma de pagamento</label>
            <select name="formaPagamento" required><br>
                <option value="boleto">Boleto</option>
                <option value="pix">Pix</option>
                <option value="cartao">Cartão de crédito/débito</option>
                <option value="transferencia">Transferência Bancária</option>>
            </select><br>
            <label for="">Data da transação</label>
            <input type="date" name="dateRegister" required><br>
            <label for="">Sacar/Transferir</label>
            <select name="sacar" required><br>
                <option value="1">Transferência</option>
                <option value="0">Sacar</option>
            </select><br>
            <input type="submit" value="Realizar" name="btnRegister" class="btnRegister">
        </form>
        <?php
        if(isset($_POST['value'])){
            include './../php/sql/addDados.php';
        }
        ?>
    </div>
    
</body>
</html>
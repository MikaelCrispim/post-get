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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST e GET</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/verificacao.css">
</head>
<body>
    <form action="" method="get">
        <label>Qual a forma de filtragem?</label><br>
        <select name="verificacoes">
            <option value="1" name="dateFilter">Data da transação</option>
            <option value="2" name="valor">Valor</option>
            <option value="3" name="formPgto">Forma de pagamento</option>
            <option value="4" name="receivedSend">Recebida/Enviada</option>
        </select><br>
        <?php
if(isset($_GET['verificacoes'])){
    switch ($_GET['verificacoes']) {
        case 1:
            echo "
            
            <label>Deseja verificar depósitos que foram realizados em qual período:</label>
            <br><input type=date name=dateInicio><br>
            <input type=date name=dateFim><br>
            
            ";
            break;
        case 2:
            echo "
            
            <label>Deseja verificar depósitos que foram realizados até qual quantia?</label>
            <br><input type=number placeholder=Valor name=value_ver step=any min=0><br>
            
            ";
            break;
        case 3:
            echo "
            
            <label>Deseja verificar depósitos que foram realizados com qual forma de pagamento?</label>
            <select name=formaPagamento_ver><br>
                <option value=boleto_ver>Boleto</option>
                <option value=pix_ver>Pix</option>
                <option value=cartao_ver>Cartão de crédito/débito</option>
                <option value=transferencia_ver>Transferência Bancária</option>
            </select><br>
            
            
            ";
            break;
        case 4:
            echo"
            
            <label>Deseja verificar depósitos que foram enviados ou recebidos?</label>
            <select name=receivedSend_ver><br>
                <option value=1>Enviados</option>
                <option value=0>Recebidos</option>
            </select><br>
            
            
            ";
            break;
    }
}
?>
        <input type="submit" value="Ok" name="btnFilter" class="btnFilter">
        <button><a href="./verificacao.php">Voltar</a></button>
    </form>
    <?php
    if(isset($_GET['dateInicio']) or isset($_GET['value_ver']) or isset($_GET['formaPagamento_ver']) or isset($_GET['receivedSend_ver'])){
        include './sql/consultDados.php';
    }
    ?>
</body>
</html>
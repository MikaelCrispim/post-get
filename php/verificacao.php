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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
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
<script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</script>
</html>
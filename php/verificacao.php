<?php
if(isset($_GET['verificacoes'])){
    switch ($_GET['verificacoes']) {
        case 1:
            echo "
            <form action=? method=get>
            <label>Deseja verificar depósitos que foram realizados em qual período:</label>
            <br><input type=date name=dateInicio><br>
            <input type=date name=dateFim><br>
            <input type=submit value=Filtrar><input type=submit value=Voltar name=back>
            </form>";
            break;
        case 2:
            echo "
            <form action=? method=get>
            <label>Deseja verificar depósitos que foram realizados até qual quantia?</label>
            <br><input type=number placeholder=Valor name=value_ver step=any min=0><br>
            <input type=submit value=Filtrar><input type=submit value=Voltar name=back>
            </form>";
            break;
        case 3:
            echo "
            <form action=? method=get>
            <label>Deseja verificar depósitos que foram realizados com qual forma de pagamento?</label>
            <select name=formaPagamento_ver><br>
                <option value=boleto_ver>Boleto</option>
                <option value=pix_ver>Pix</option>
                <option value=cartao_ver>Cartão de crédito/débito</option>
                <option value=transferencia_ver>Transferência Bancária</option>
            </select><br>
            <input type=submit value=Filtrar><input type=submit value=Voltar name=back>
            </form>
            ";
            break;
        case 4:
            echo"
            <form action=? method=get>
            <label>Deseja verificar depósitos que foram enviados ou recebidos?</label>
            <select name=receivedSend_ver><br>
                <option value=1>Enviados</option>
                <option value=0>Recebidos</option>
            </select><br>
            <input type=submit value=Filtrar><input type=submit value=Voltar name=back>
            </form>
            ";
            break;
    }

    if(isset($_GET['back'])){
        header("location: ../index.php");
    }
}else {
    {
        echo'<form action="?" method="get">
        <label>Qual a forma de filtragem?</label><br>
        <select name="verificacoes">
            <option value="1" name="dateFilter">Data da transação</option>
            <option value="2" name="valor">Valor</option>
            <option value="3" name="formPgto">Forma de pagamento</option>
            <option value="4" name="receivedSend">Recebida/Enviada</option>
        </select><br>
        <input type="submit" value="Ok" name="btnFilter" class="btnFilter">
    </form>';
    }
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
    
</body>
</html>
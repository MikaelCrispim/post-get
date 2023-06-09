<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>POST E GET</title>
</head>
<body>
    <?php include "../php/verificacao.php"?>
    <div class="form_verificacoes">
    <?php    
    if(!isset($_GET['verificacoes'])){
        echo'<form action="?" method="get">
        <label>Qual a forma de filtragem?</label>
        <select name="verificacoes">
            <option value="1" name="dateFilter">Data da transação</option>
            <option value="2" name="valor">Valor</option>
            <option value="3" name="formPgto">Forma de pagamento</option>
            <option value="4" name="receivedSend">Recebida/Enviada</option>
        </select>
        <input type="submit" value="Ok" name="btnFilter" class="btnFilter">
    </form>';
    }
    ?>
    </div>
</body>
</html>
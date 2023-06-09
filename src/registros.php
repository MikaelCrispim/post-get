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
    <div class="form_transacoes">
        <form action="?" method="post">
            <input type="number" placeholder="Valor" name="value" step="any" min="0" required>
            <label>Forma de pagamento</label>
            <select name="formaPagamento" required>
                <option value="boleto">Boleto</option>
                <option value="pix">Pix</option>
                <option value="cartao">Cartão de crédito/débito</option>
                <option value="transferencia">Transferência Bancária</option>>
            </select>
            <label for="">Data da transação</label>
            <input type="date" name="dateRegister" required>
            <label for="">Sacar/Transferir</label>
            <select name="sacar">
                <option value="1">Transferência</option>
                <option value="0">Sacar</option>
            </select>
            <input type="submit" value="Realizar" name="btnRegister" class="btnRegister">
        </form>
    </div>
    
</body>
</html>
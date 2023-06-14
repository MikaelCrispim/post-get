<?php
if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['user'])){
    die("<p style='text-align:center;'>Faça o login para acessar a página. <a href =\"./../index.php\" style='text-decoration: none;';>Entrar</a></p>");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/registros.css">
    <title>POST E GET</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">DS Bank</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./registros.php">Registrar transações</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="./../php/verificacao.php">Consultar transações</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="./../php/login/logout.php">Logout</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div class="form_transacoes">
        <label>Seja bem-vindo, <?php echo $_SESSION['name']?>!</label>
        <form action="?" method="post">
            <label>Valor</label>
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
                <option value="Enviada">Transferência</option>
                <option value="Recebida">Sacar</option>
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
<script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</script>
</html>
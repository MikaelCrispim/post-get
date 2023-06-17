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
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">DS Bank</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./../src/registros.php">Registrar transações</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./verificacao.php">Consultar transações</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./../php/login/logout.php">Logout</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <?php
    if($_SERVER["REQUEST_METHOD"] == 'GET'){
        if(empty($_GET['verificacoes'])){
            ?>
    <div class="form_verificacao">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    <label>Seja bem-vindo, <?php echo $_SESSION['name']?>!</label>
        <select name="verificacoes">
            <option value="1" name="dateFilter">Data da transação</option>
            <option value="2" name="valor">Valor</option>
            <option value="3" name="formPgto">Forma de pagamento</option>
            <option value="4" name="receivedSend">Recebida/Enviada</option>
        </select><br>
        <input type="submit" value="Ok" name="btnFilter" class="btnFilter">
    </form>
    <?php
        }
        elseif(empty($_GET['dateInicio']) && empty($_GET['value_ver']) && empty($_GET['formaPagamento_ver']) && empty($_GET['receivedSend_ver'])){
    switch ($_GET['verificacoes']) {
        case 1:
            ?>
            <div class="form_verificacao">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <label>Deseja verificar depósitos que foram realizados em qual período:</label>
            <br><input type=date name=dateInicio><br>
            <input type=date name=dateFim><br>
            <input type="hidden" name="verificacoes" value="<?php echo $_GET["verificacoes"]; ?>">
            <input type="submit" value="Ok" name="btnFilter" class="btnFilter">
            </form>
            </div>
            <?php
            break;
        case 2:
            ?>
            <div class="form_verificacao">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <label>Deseja verificar depósitos que foram realizados até qual quantia?</label>
            <br><input type=number placeholder=Valor name=value_ver step=any min=0><br>
            <input type="hidden" name="verificacoes" value="<?php echo $_GET["verificacoes"]; ?>">
            <input type="submit" value="Ok" name="btnFilter" class="btnFilter">
            </form>
            </div>
            <?php
            break;
        case 3:
            ?>
            <div class="form_verificacao">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <label>Deseja verificar depósitos que foram realizados com qual forma de pagamento?</label>
            <select name=formaPagamento_ver><br>
                <option value=boleto>Boleto</option>
                <option value=pix>Pix</option>
                <option value=cartao>Cartão de crédito/débito</option>
                <option value=transferencia>Transferência Bancária</option>
            </select><br>
            <input type="hidden" name="verificacoes" value="<?php echo $_GET["verificacoes"]; ?>">
            <input type="submit" value="Ok" name="btnFilter" class="btnFilter">
            </form>
            </div>
            <?php
            break;
        case 4:
            ?>
            <div class="form_verificacao">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <label>Deseja verificar depósitos que foram enviados ou recebidos?</label>
            <select name=receivedSend_ver><br>
                <option value=Enviada>Enviados</option>
                <option value=Recebida>Recebidos</option>
            </select><br>
            <input type="hidden" name="verificacoes" value="<?php echo $_GET["verificacoes"]; ?>">
            <input type="submit" value="Ok" name="btnFilter" class="btnFilter">
        </form>
        </div>
        </div><?php
            break;
}
}else{
    include './sql/consultDados.php';
}
    }
    ?>
</body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</html>
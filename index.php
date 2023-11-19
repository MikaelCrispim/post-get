<?php
    if(isset($_POST['name'])){
        include __DIR__ . "/php/login/register.php";
	}
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST e GET</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="areaForm">
        <div class="form">
            <form action="?" method="post">
                <input type="text" name="name" placeholder="Nome" maxlength="15" required autofocus><br>
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="password" name="password" placeholder="Senha" minlength="8" required><br>
                <input type="submit" value="Cadastrar" class="button" name="btnCadastro">
                <label style="color:#000">Profissão</label>
                <select name="profession">
                    <option value = "administrativo" name="adm">Administrativo</option>
                    <option value = "comercial" name="cml">Comercial</option>
                    <option value = "financeiro" name="fin">Financeiro</option>
                    <option value = "operacional" name="ope">Operacional</option>
                    <option value = "outro" name="other">Outro</option>
                </select><br>
                <p style="margin-top:15px;color:#fff">Já possui uma conta? <a href="./src/login.php">Entrar</a></p>
            </form>
        </div>
        <a href="./php/sql/startBD.php" style="color:#fff;position:absolute; bottom:0; right:0;">Iniciar banco de dados</a>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
    <title>GET E POST</title>
</head>
<body>
    <div class="formLoginArea">
    <?php
            if(isset($_POST['email_login'])){
            include __DIR__ .'/../php/login/login.php';
            }
            ?>
        <div class="form_login">
            <form action="?" method="post">
                <input type="text" name="email_login" placeholder="Email" required><br>
                <input type="password" name="password_login" placeholder="Senha" required><br>
                <input type="submit" value="Entrar" class="btnLogin" name="btnLogin"><br>
                <p style="color:#fff">Não possui uma conta? <a href="../index.php">Cadastrar</a></p>
            </form>
        </div>
        
    </div>
</body>
</html>
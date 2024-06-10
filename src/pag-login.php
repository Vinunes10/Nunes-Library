<?php
        include "contents/login.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nunes Library</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/biblioteca-on-line.ico" type="image/x-icon">
</head>
<body>
    <div class="conteiner">
        <h1>Login</h1>
        <form action="" method="post">
            <input type="email" class="field" name="email" placeholder="E-mail" required>
            <input type="password" class="field" name="senha" placeholder="Senha" required>
            <input type="submit" value="Logar" class="custom-btn" name="logar">
        </form>
        <a href="pag-cadastro.php">Cadastrar-se</a>
    </div>
</body>
</html>
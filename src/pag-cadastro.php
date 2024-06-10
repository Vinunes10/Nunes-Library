<?php

    include "contents/cadastro.php";

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
        <h1>Cadastro</h1>
        <form action="" method="post">
            <input type="text" class="field" name="nome" placeholder="Nome" required>
            <input type="email" class="field" name="email" placeholder="E-mail" required>
            <input type="password" class="field" name="senha" placeholder="Senha" required>
            <input type="password" class="field" name="conf-senha" placeholder="Confirmação" required>
            <input type="submit" value="Cadastrar" class="custom-btn" name="cadastrar">
        </form>
        <a href="pag-login.php">Login</a>
    </div>
</body>
</html>
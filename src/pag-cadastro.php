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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</head>
<body>
    <div class="conteiner">
        <div class="box">
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
    </div>
</body>
</html>
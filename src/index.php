<?php

session_start();

if (isset($_SESSION["id"])) {
    header("Location: painel.php");
}

include "contents/login.php";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nunes Library</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="shortcut icon" href="assets/img/biblioteca-on-line.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="conteiner">
        <header>

            <h1>Nunes Library</h1>

            <nav class="navbar">
                <a href="#">Home</a>
                <a href="">Sobre</a>
                <a href="src/pag-cadastro.php">Contato</a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                    </svg>
                    Conta
                </a>
            </nav>
        </header>
        <main>
            <div class="content">
                <h2>Sua livraria pessoal</h2>
                <p>Nunes Library é uma biblioteca virtual onde você pode visualizar, editar e excluir uma lista de todos os livros que possui.
                Nosso banco de dados é alimentado por todos os usuários cadastrados e conta com mais de 2000 obras distintas. Esse projeto foi 
                feito pelo aluno Pedro Vinícius Nunes Alves para uma avaliação do curso de informática da escola EEEP Dr. José Alves da Silveira 
                das disciplinas de PW e POO do professor Rafael Fernandes. </p>
            </div>
            <div class="login">
                <h2>Login</h2>
                <form action="" method="post">
                    <input type="email" class="field" name="email" placeholder="E-mail" required>
                    <input type="password" class="field" name="senha" placeholder="Senha" required>
                    <input type="submit" value="Logar" class="custom-btn" name="logar">
                </form>
                <a href="pag-cadastro.php">Cadastrar-se</a>
            </div>
        </main>
        <footer>

        </footer>
    </div>
</body>
</html>
<?php

include_once "contents/protect.php";

include_once "contents/edit.php";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nunes Library</title>
    <link rel="stylesheet" href="assets/css/livros.css">
    <link rel="shortcut icon" href="assets/img/biblioteca-on-line.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
</head>
<body>
    <div class="conteiner">
        <header>

            <h1>Nunes Library</h1>

            <nav class="navbar">
                <a href="contents/logout.php">Deslogar</a>
                <a href="painel.php">Voltar</a>
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
            <div class="add-books">
            <h1>Editar Livro</h1>
                <form action="" method="post">
                    <input type="text" class="field" name="autor" placeholder="Autor" value="<?= $autor ?>">
                    <input type="text" class="field" name="titulo" placeholder="Título" value="<?= $titulo ?>">
                    <input type="text" class="field" name="subtitulo" placeholder="Subtítulo" value="<?= $subtitulo ?>">
                    <input type="text" class="field" name="edicao" placeholder="Edição" value="<?= $edicao ?>">
                    <input type="text" class="field" name="editora" placeholder="Editora" value="<?= $editora ?>">
                    <input type="date" class="field" name="ano-de-publicacao" placeholder="Ano de Publicação" value="<?= $public ?>">
                    <input type="submit" class="custom-btn" name="editar" value="Editar">
                </form>
            </div>
        </main>
        <footer>

        </footer>
    </div>
</body>
</html>
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
            <?php
                echo "<h1>Biblioteca de {$_SESSION['nome']}</h1>";
            ?>

            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="contents/logout.php">Deslogar</a>
                <a href="painel.php">Voltar</a>
                <a href="">Conta</a>
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
<?php
    include "contents/protect.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nunes Library</title>
    <link rel="stylesheet" href="assets/css/painel.css">
    <link rel="shortcut icon" href="assets/img/biblioteca-on-line.ico" type="image/x-icon">   
</head>
<body>
    <header>

        <?php
            echo "<h1>Biblioteca de {$_SESSION['nome']}</h1>";
        ?>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="contents/logout.php">Sair</a>
            <a href="">Livros</a>
        </nav>

    </header>

    <main>

        <div class="library">

            <section class="top">

                <h1>Painel - Meus Livros</h1>

                <button class="add-btn">Adicionar</button>

            </section>
            
            <section class="book-control">

                <div class="books">

                    <table>
                        <tr>
                            <th>Nome</th>
                            <th>Data de Criação</th>
                            <th>Configurações</th>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>

                </div>

            </section>

        </div>
        
    </main>

    <footer>

    </footer>
</body>
</html>
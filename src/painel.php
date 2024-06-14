<?php
    include "contents/protect.php";

    include "contents/controle-livraria.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nunes Library</title>
    <link rel="stylesheet" href="assets/css/painel.css">
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
                <a href="">Conta</a>
            </nav>

        </header>

        <main>
            <section class="library">
                <div class="top">
                    <h2>Meus Livros</h2>
                    <a href="add-livros.php"><button class="add-btn">Adicionar</button></a>
                </div>
                <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Data de Criação</th>
                            <th scope="col">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row_msg_cont = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo "<tr>";
                                echo "<td>" . $row_msg_cont['titulo'] . "</td>";
                                echo "<td>" . $row_msg_cont['autor'] . "</td>";
                                echo "<td>" . $row_msg_cont['ano-de-publicacao'] . "</td>";
                                echo "<td>Ações</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                    </table>
            </section>
        </main>

        <footer>

        </footer>
    </div>
</body>
</html>
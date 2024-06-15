<?php

require_once "Conexao.php";

if (!empty($_GET["id"])) {

    $pdo = Conexao::Conectar("conf.ini");

    $id = $_GET["id"];

    $sqlSelect = "SELECT * FROM livros WHERE id=:id";

    $stmt = $pdo->prepare($sqlSelect);

    $result = $stmt->execute([
        ":id" => $id
    ]);

    $dados = $stmt->fetch(PDO::FETCH_ASSOC);

    if($dados) {

        $sqlDelete = "DELETE FROM livros WHERE id=:id";

        $stmt = $pdo->prepare($sqlDelete);

        $resultDelete = $stmt->execute([
            ":id" => $id
        ]);

    header("Location: ../painel.php");

    } else {
        header("Location: ../painel.php");
    }

}
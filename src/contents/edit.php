<?php

require_once "contents/Conexao.php";

if (!empty($_GET["id"])) {

    $pdo = Conexao::Conectar("conf.ini");

    $id = $_GET["id"];

    $sql = "SELECT * FROM livros WHERE id=:id";

    $stmt = $pdo->prepare($sql);

    $result = $stmt->execute([
        ":id" => $id
    ]);

    $dados = $stmt->fetch(PDO::FETCH_ASSOC);

    if($dados) {

        $autor = $dados["autor"];
        $titulo = $dados["titulo"];
        $subtitulo = $dados["subtitulo"];
        $edicao = $dados["edicao"];
        $editora = $dados["editora"];
        $public = $dados["ano_de_publicacao"];

    } else {
        header("Location: painel.php");
    }

}

if (isset($_POST["editar"])) {

    $autor = $_POST["autor"];
    $titulo = $_POST["titulo"];
    $subtitulo = $_POST["subtitulo"];
    $edicao = $_POST["edicao"];
    $editora = $_POST["editora"];
    $public = $_POST["ano-de-publicacao"];

    $pdo = Conexao::Conectar("conf.ini");

    $sql = "UPDATE livros SET autor='$autor', titulo='$titulo', subtitulo='$subtitulo', edicao='$edicao', editora='$editora', ano_de_publicacao='$public' WHERE id='$id'";

    $stmt = $pdo->prepare($sql);

    $qtdLinhas = $stmt->execute();

    header("Location: painel.php");
}
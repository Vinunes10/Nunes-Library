<?php

if(isset($_POST["adicionar"])) {

    require_once "Conexao.php";

    $autor = $_POST["autor"];
    $titulo = $_POST["titulo"];
    $subtitulo = $_POST["subtitulo"];
    $edicao = $_POST["edicao"];
    $editora = $_POST["editora"];
    $public = $_POST["ano-de-publicacao"];
    
    $pdo = Conexao::Conectar("conf.ini");
            
    $sql = "INSERT INTO livros(autor, titulo, subtitulo, edicao, editora, ano_de_publicacao) VALUES(:autor, :titulo, :subtitulo, :edicao, :editora, :public)";
    $stmt = $pdo->prepare($sql);
    
    $qtdLinhas = $stmt->execute([
        ":autor" => $autor,
        ":titulo" => $titulo,
        ":subtitulo" => $subtitulo,
        ":edicao" => $edicao,
        ":editora" => $editora,
        ":public" => $public
    ]);

    $idLivro = $pdo->lastInsertId();
    $idUsuario = $_SESSION['id_usuario'];

    $sql = "INSERT INTO relacao_livro_usuario(id_livro, id_usuario) VALUES(:idLivro, :idUsuario)";
    $stmt = $pdo->prepare($sql);
    
    $
    $qtdLinhas = $stmt->execute([
        ":idLivro" => $idLivro,
        ":idUsuario" => $idUsuario
    ]);
}
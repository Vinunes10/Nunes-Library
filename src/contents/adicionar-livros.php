<?php

if(isset($_POST["adicionar"])) {

    require_once "Conexao.php";

    $autor = $_POST["autor"];
    $titulo = $_POST["titulo"];
    $subtitulo = $_POST["subtitulo"];
    $edicao = $_POST["edicao"];
    $editora = $_POST["editora"];
    $public = $_POST["ano-de-publicacao"];
    $file = $_FILES["file"];

    $pasta = "assets/db_imgs";
    $nome_arquivo = uniqid();
    $extensao = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $caminho = $pasta . "/" . $nome_arquivo . "." . $extensao;
    $registro = move_uploaded_file($file['tmp_name'], $pasta . "/" . $nome_arquivo . "." . $extensao);
    
    $pdo = Conexao::Conectar("conf.ini");
            
    $sql = "INSERT INTO livros(autor, titulo, subtitulo, edicao, editora, ano_de_publicacao, capa, user_id) VALUES(:autor, :titulo, :subtitulo, :edicao, :editora, :public, :capa, :user_id)";
    $stmt = $pdo->prepare($sql);
    
    $qtdLinhas = $stmt->execute([
        ":autor" => $autor,
        ":titulo" => $titulo,
        ":subtitulo" => $subtitulo,
        ":edicao" => $edicao,
        ":editora" => $editora,
        ":public" => $public,
        ":capa" => $caminho,
        ":user_id" => $_SESSION['id']
    ]);

    // $idLivro = $pdo->lastInsertId();
    // $idUsuario = $_SESSION['id_usuario'];

    // $sql = "INSERT INTO relacao_livro_usuario(id_livro, id_usuario) VALUES(:idLivro, :idUsuario)";
    // $stmt = $pdo->prepare($sql);
    
    // $qtdLinhas = $stmt->execute([
    //     ":idLivro" => $idLivro,
    //     ":idUsuario" => $idUsuario
    // ]);
}
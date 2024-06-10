<?php

if (isset($_POST["logar"])) {

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    require "Conexao.php";

    $pdo = Conexao::Conectar("conf.ini");

    $sql = "SELECT * FROM usuarios WHERE Email=:email and Senha=:senha";

    $stmt = $pdo->prepare($sql);

    $qtdLinhas = $stmt->execute([
        ":email" => $email,
        ":senha" => $senha
    ]);

    $usuario = $stmt->fetchAll();

    // var_dump($usuario);

    if (count($usuario) == "1") {

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION["id"] = $usuario[0]["ID"];
        $_SESSION["nome"] = $usuario[0]["Nome"];

        // var_dump($_SESSION);

        header("Location: painel.php");

    } else {
        echo "ERRO";
    }

}
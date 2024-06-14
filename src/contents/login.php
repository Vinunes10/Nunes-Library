<?php

if (isset($_POST["logar"])) {

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    require "Conexao.php";

    $pdo = Conexao::Conectar("conf.ini");

    $sql = "SELECT * FROM usuarios WHERE email=:email and senha=:senha";

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

        $_SESSION["id"] = $usuario[0]["id"];
        $_SESSION["nome"] = $usuario[0]["nome"];

        // var_dump($_SESSION);

        header("Location: painel.php");

    } else {
        echo "<script>alert('Falha no Login, tente novamente.')</script>";
    }

}
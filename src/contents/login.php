<?php

if (isset($_POST["logar"])) {

    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
    
    require_once "Conexao.php";

    $pdo = Conexao::Conectar("conf.ini");

    $sql = "SELECT * FROM usuarios WHERE email=:email";

    $stmt = $pdo->prepare($sql);

    $qtdLinhas = $stmt->execute([
        ":email" => $email,
    ]);

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    // var_dump($usuario);

    if(password_verify($_POST["senha"], $usuario["senha"])) {
        if (count($usuario) != "0") {

            if (!isset($_SESSION)) {
                session_start();
            }
    
            $_SESSION["id"] = $usuario["id"];
            $_SESSION["nome"] = $usuario["nome"];
    
            // var_dump($_SESSION);
    
            header("Location: painel.php");
    
        } else {
            echo "<script>alert('Falha no Login, tente novamente.')</script>";
    
        }
    }

}
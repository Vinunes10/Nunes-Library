<?php

if (isset($_POST["cadastrar"])) {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $senha_c = $_POST["conf-senha"];

    if ($senha == $senha_c) {
        require "Conexao.php";

        $pdo = Conexao::Conectar("conf.ini");
        
        $sql = "INSERT INTO usuarios(Nome, Email, Senha) VALUES(:nome, :email, :senha)";
        
        $stmt = $pdo->prepare($sql);
        
        $qtdLinhas = $stmt->execute([
            ":nome" => $nome,
            ":email" => $email,
            ":senha" => $senha,
        ]);    
    } else {
        echo "<script>alert('Senhas Diferentes')</script>";
    }

}
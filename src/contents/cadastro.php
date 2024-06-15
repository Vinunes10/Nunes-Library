<?php 

try {
    if (isset($_POST["cadastrar"])) {

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
        $senha_c = $_POST["conf-senha"];

        if (password_verify($senha_c, $senha)) {

            require_once "Conexao.php";

            $pdo = Conexao::Conectar("conf.ini");
        
            $sql = "INSERT INTO usuarios(nome, email, senha) VALUES(:nome, :email, :senha)";
            
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
}catch(PDOException $msg){
    echo "<script>alert('Esse email já está cadastrado.')</script>";
}
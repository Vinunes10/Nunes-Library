<?php

require_once "Conexao.php";

$pdo = Conexao::Conectar("conf.ini");

$id = $_SESSION['id'];

$sql = "SELECT * FROM usuarios a
	INNER JOIN livros b ON a.id = b.user_id WHERE b.user_id = :id;";

$stmt = $pdo->prepare($sql);

$stmt->execute([
	":id" => $_SESSION["id"]
]);
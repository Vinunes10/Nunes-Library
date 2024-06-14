<?php

require_once "Conexao.php";

$pdo = Conexao::Conectar("conf.ini");

$sql = "SELECT * FROM livros ORDER BY id ASC";

$stmt = $pdo->prepare($sql);

$stmt->execute();
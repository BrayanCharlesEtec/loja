<?php
require 'conexao.php';

$nome        = $_POST['nome']        ?? '';
$preco       = $_POST['preco']       ?? '';
$quantidade  = $_POST['quantidade']  ?? '';

$sql = "INSERT INTO produtos (nome, preco, quantidade)
        VALUES (:nome, :preco, :quantidade)";
$stmt = $pdo->prepare($sql);

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':preco', $preco);
$stmt->bindParam(':quantidade', $quantidade, PDO::PARAM_INT);

if ($stmt->execute()) {
    header("Location: listar.php?ok=1");
    exit;
} else {
    http_response_code(500);
    echo "Erro ao inserir produto.";
}


<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE from tb_usuarios WHERE id_usuario = ?");

$userId = 2;

$stmt->execute(array($userId));

// $conn->rollBack();
$conn->commit();

echo "Dados removidos com sucesso!";
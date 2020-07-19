<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("DELETE from tb_usuarios WHERE id_usuario = :ID");

$userId = 3;

$stmt->bindParam(":ID", $userId);

$stmt->execute();

echo "Dados removidos com sucesso!";
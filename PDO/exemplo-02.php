<?php

$conn = new PDO("mysql:dbname=php_course;host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, senha) VALUES(:LOGIN, :PASSWORD)");

$login = "joao";
$password = "teste";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido!"
?>
<?php

$conn = new PDO("mysql:dbname=php_course;host=localhost", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, senha = :PASSWORD WHERE idusuario = :ID");

$login = "gina";
$password = "12345678";
$id = 4;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Atualizado!"
?>
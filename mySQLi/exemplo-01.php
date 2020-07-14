<?php

$conn = new mysqli('localhost', 'root', '', 'php_course');

if ($conn->connect_error) {
    echo 'Error: ' . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, senha) VALUES (?, ?)");

$login = "arnaldo";

$pass = "123456";

$stmt->bind_param("ss", $login, $pass);

$stmt->execute();

?>
<?php

require_once('config.php');

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome('Paulo Gramacho');
$cad->setEmail('neto@gmail.com');
$cad->setSenha('123456');

echo $cad;
echo '<br/>';
$cad->registrarVenda();


?>
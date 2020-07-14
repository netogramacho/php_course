<?php

$qualSDuaIdade = 22;


$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;


if ($qualSDuaIdade < $idadeCrianca) {
	echo "Criança.";
} else if ($qualSDuaIdade < $idadeMaior) {
	echo "Adolescente.";
} else if ($qualSDuaIdade < $idadeMelhor) {
	echo "Adulto.";
} else {
	echo "Idoso.";
}

 	echo "<br/>";

 	echo ($qualSDuaIdade < $idadeMaior) ? "Menor de idade." : "Maior de idade.";

?>
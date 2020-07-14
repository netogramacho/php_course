<?php 

	$nome = "Hcode";
	$site = 'www.hcode.com.br';

	$ano = 1997;
	$salario = 5500.99;
	$bloqueado = false;

	/////////////////////////////////////////

	$frutas = array('abacaxi', 'laranja', 'manga');

	echo $frutas[2];

	$nascimento = new DateTime();

	echo "<br/>";

	var_dump($nascimento);

	//////////////////////////////////////////

	echo "<br/>";

	$arquivo = fopen('exemplo-03.php', 'r');

	var_dump($arquivo);

	echo "<br/>";

	$nulo = NULL;
	///////////////// DIFERENTE

	$vazio = "";

?>
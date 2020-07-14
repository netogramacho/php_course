<?php 

$nome = 'Paulo';

function teste() {
	global $nome;

	echo $nome;
}

function teste2() {
	$nome = 'joao';
	echo $nome . " teste2";
}

teste();
echo '<br/>';
teste2();
?>
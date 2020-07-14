<?php

	$frase = "A repetição é mãe da retenção.";
	$palavra = "mãe";
	$q = strpos($frase, $palavra);
	var_dump($q);
	echo '<br/>';

	$texto = substr($frase, 0, $q);
	echo $texto;
	echo '<br/>';

	$textoFinal = substr($frase, $q + strlen($palavra), strlen($frase));
	echo $textoFinal;


?>
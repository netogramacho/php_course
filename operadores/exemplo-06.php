<?php

	$a = NULL;

	$b = NULL;

	$c = 10;

	echo $a ?? $b ?? $c;
	echo '<br/>';

	$b = 8;

	echo $a ?? $b ?? $c;

?>
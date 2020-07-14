<?php 

	require_once("config.php");

	//destroy($_SESSION["nome"]);
	//destroy($_SESSION["name"]);
	session_destroy();

	echo $_SESSION['nome'];

	echo $_SESSION['name'];
?>
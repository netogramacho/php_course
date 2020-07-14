<?php

$data = array(
    "nome"=>"prneto"

);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

?>
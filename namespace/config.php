<?php

spl_autoload_register(function($nameClass){
    $dirClass = 'class';
    $file_name = $dirClass . DIRECTORY_SEPARATOR . $nameClass . '.php';

    if(file_exists($file_name)){
        require_once($file_name);
    }

})

?>
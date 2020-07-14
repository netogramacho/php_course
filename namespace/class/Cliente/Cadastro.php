<?php

namespace Cliente;

class Cadastro extends \Cadastro{
    public function registrarVenda(){
        echo 'foi registrada venda para ' . $this->getNome(); 
    }
}

?>
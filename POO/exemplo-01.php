<?php 

class Pessoa {

	public $nome; // atributo

	public function falar(){ // método

		return 'O meu nome é ' . $this->nome;

	}

}


$paulo = new Pessoa();

$paulo->nome = "Paulo Gramacho";

echo $paulo->falar();

?>
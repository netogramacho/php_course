<?php 

class carro{

	private $modelo;
	private $motor;
	private $ano;

	public function getModelo(){
		return $this->modelo;
	}
	public function getMotor():float{
		return $this->motor;
	}
	public function getAno():int{
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}
	public function setMotor($motor){
		$this->motor = $motor;
	}
	public function setAno($ano){
		$this->ano = $ano;
	}

	public function exibir(){
		return array(
			'modelo' => $this->modelo,
			'motor' => $this->motor,
			'ano' => $this->ano,
		);
	}

}

$gol = new carro();
$gol->setModelo('Gol GT');
$gol->setMotor('1.6');
$gol->setAno('2017');

var_dump($gol->exibir());

?>
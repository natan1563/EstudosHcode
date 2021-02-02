<?php 

class Endereco { 

	private $logadouro;
	private $numero; 
	private $cidade;

	public function __construct(String $a, int $b, String $c) {
		$this->logradouro = $a;
		$this->numero 	  = $b;
		$this->cidade 	  = $c;
	}

	public function __destruct() {

		//var_dump("DESTRUIR");

	}

	public function __toString() {
		return $this->logradouro.', '.$this->numero.', '.$this->cidade;
	}
}

$meuEndereco = new Endereco('Rua 2 de Julho', '425', 'Salvador BA');

echo $meuEndereco->__toString();
?>
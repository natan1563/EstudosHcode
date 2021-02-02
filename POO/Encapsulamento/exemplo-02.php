<?php 

class Pessoa {

	public $nome = "Rasmus Lerdof";
	protected $idade = 48;
	private $senha = "123456";


	public function verDados() {
		echo $this->nome."\n";
		echo $this->idade."\n";
		echo $this->senha."\n ";
	}
}

class Programador extends Pessoa { 

	public function verDados() {
		
		echo get_class($this). '<br>';

		echo $this->nome."\n";
		echo $this->idade."\n";
		echo $this->senha."\n ";
	}
}


$objeto = new Programador;

//echo $objeto->senha;

$objeto->verDados();

?>
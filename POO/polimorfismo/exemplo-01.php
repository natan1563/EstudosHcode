<?php 


abstract class Animal {

	public function falar() {
		return "Som";
	}

	public function mover() {
		return "Anda";
	}
}

class Cachorro extends Animal {
	
	public function falar() {
		return "Late";
	}

}

class Gato extends Animal {
	
	public function falar() {
		return "Mia";
	}

}

class Passaro extends Animal {
	
	public function falar() {
		return "Mia";
	}

	public function mover() {
		return "Voa e ".parent::mover();
	}

}

$pluto = new Cachorro();

echo $pluto->falar()."\n";
echo $pluto->mover()."\n";

echo "--------------------------\n";
$garfield = new Gato;

echo $garfield->falar()."\n";
echo $garfield->mover()."\n";

echo "--------------------------\n";

$ave = new Passaro;
echo $ave->falar()."\n";
echo $ave->mover()."\n";

?>
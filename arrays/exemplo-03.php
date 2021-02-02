<?php 


$pessoas =  array();

array_push($pessoas, array(
	'nome'=>'João',
	'idade'=>20
));

array_push($pessoas, array(
	'nome'=>'Natã',
	'idade'=>25
));

print_r($pessoas[1]['nome']);
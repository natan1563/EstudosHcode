<?php 


function ola() {

	$argumentos = func_get_args();
	return count($argumentos);
}


var_dump(ola("Bom Dia", 1231, 123213));
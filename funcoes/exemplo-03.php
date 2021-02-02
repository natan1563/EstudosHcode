<?php 

function ola($texto = "mundo", $periodo = "Bom dia") {
	return "Olá $texto!! $periodo<br>";
}

echo ola();
echo ola("Natã", "Boa noite");
echo ola("Patã", "Boa tarde");

?>
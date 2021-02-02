<?php 


function trataNome($name = "") {
	
	if(!$name) {
	
		throw new Exception("Nenhum nome foi informado.<br>", 30);
		
	}

	echo trim(ucfirst($name))."<br>";

}


try {

	trataNome("Nata");
	trataNome("");

} catch(Exception $e) {
	
	echo $e->getMessage();

} finally {

	echo "Executou o Try!";

}

?>
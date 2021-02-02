<?php 



function teste($callback){

	//Procecsso lento 

	$callback();


}


teste(function(){
	echo "Terminou";
})


?>
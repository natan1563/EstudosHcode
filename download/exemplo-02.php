<?php 


$file = "Koala.jpg";

if(file_exists($file)){

	$content = file_get_contents($file);

	$basename = basename($file);


	$file = fopen($file, "w");

	fwrite($file, $content);

	fclose($file);

}


?>

<img src="<?=$basename?>">
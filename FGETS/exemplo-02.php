<?php 

$filename = "logo.png";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);


$mimetype = $fileinfo->file($filename);

$base64encode =  "data:".$mimetype.";base64,".$base64;

var_dump($base64encode);

?>

<a href="logo.png" target="_blank" download>Link para Imagem</a>
 
<img src="<?=$base64encode?>">
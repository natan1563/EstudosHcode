<!DOCTYPE html>
<html>
<head>
	<title>Carregador de Arquivos</title>
</head>
<body>

<center>
	<h1>Wellcome to, the Upload Files</h1>

	<form action="#" method="POST" enctype="multipart/form-data">

		<input type="file" name="fileUpload">

		<button type="submit">Carregar</button>

		<a href="downloads.php" style=" margin: 0 10px; padding: 5px; 
				   		   border: red 2px;
				   		   background-color: gray; color: white;
				   		   text-decoration: none;">Downloads</a>
	</form>

</center>
</body>
</html>

<?php 

if($_SERVER["REQUEST_METHOD"] === "POST") {
	
	require_once("config.php");

	$arquivo = new File($_FILES['fileUpload']);

	$arquivo->uploadFile();

	$scandir = $arquivo->scanFiles("files");

	$val = null;
	$push = array();

	foreach ($scandir as $values) { 
		
		//No local de trabalho retirar o . DIRECTORY_SEPARATOR

		$val =  $_SERVER["REQUEST_URI"];
	 	$val .= $values;

		$val = str_replace("\\", "/", $val);
		array_push($push, $val);

	 } 

	 ?> 

	 <center>
	 	 <hr>
		 <img src="files/<?=$arquivo->nameFile();?>" title="<?=$arquivo->nameFile();?>" width="1040px">
	 </center>

<?php } ?>


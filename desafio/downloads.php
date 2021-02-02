<!DOCTYPE html>
<html>
<head>
	<title>Carregador de Arquivos</title>
</head>
<body bgcolor="#7FFFD4">

<center>
	<h1>Wellcome to, the Download Files</h1>
	<a href="index.php">Add new File</a>
</center>
</body>
</html>

<?php 

require_once("config.php");

$down = new File();

$link = $down->downloadFiles('files');

foreach ($link as $row) { ?> 

	<div style="column-count: 2; border: 2px solid #528B8B;height: 6em; margin-bottom: 2px; display: flex;">
		
		<div style="margin: 1.35em 10px;">
			<a href="<?=$row["name"]?>" 
		   style="margin-top: 15px; display: table-cell; text-decoration: none; color: #34345a; font-size: 18px; padding: 15px; border: 2px solid #528B8B; background-color: #79CDCD;" 
		   target="_blank" 
		   download>
				Download
			</a>
		</div>

		<img src="<?=$row["name"]?>" 
			style="
					width: 9em;
					height: 6em;
					flex-direction: right;
					margin-left: auto;
				" 
			title="<?=ucfirst($row["base"]);?>">

	
	</div>

<?php } ?>


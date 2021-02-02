<?php 

$images = scandir("images");

$data = array();


foreach ($images as $value) {
	
	if (!in_array($value, array(".", ".."))) {

		$filename = "images". DIRECTORY_SEPARATOR . $value;

		$info = pathinfo($filename);
		
		$info["size"] = filesize($filename);
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		$info["URL"] = "http://localhost:8000/DIR/".str_replace("\\", "/", $filename);
		array_push($data, $info);

	}

}

echo json_encode($data);
?>
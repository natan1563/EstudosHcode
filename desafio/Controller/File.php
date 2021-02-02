<?php 


class File {

	private $dataFile;
	private $files = [];
	private $downData = [];

	public function __construct($dataFile = '') {
		$this->dataFile = $dataFile;
	}

	public function nameFile() {
		return $this->dataFile["name"];
	}

	public function uploadFile() {

		if($this->dataFile["error"]){

			throw new Exception("Erro ao tentar carregar o arquivo, tente novamente");
			
		}

		$dirFile = "files";

		if(!is_dir($dirFile)){
			
			mkdir($dirFile);

		}

		if(!move_uploaded_file($this->dataFile["tmp_name"], $dirFile . DIRECTORY_SEPARATOR . $this->dataFile["name"])){

			throw new Exception("Não Foi possivel fazer Upload");

		}
	}

	public function scanFiles(String $dir) {

		$data = scandir($dir);

		foreach ($data as $file) {
			
			if(!in_array($file, array('.', '..'))) {
				
				$path = $dir . DIRECTORY_SEPARATOR . $file;
				array_push($this->files, $path);

			}

		}

		return $this->files;
	}


	public function downloadFiles(String $dir) {
		
		$data = $this->scanFiles($dir);

		foreach ($data as $row) {
			
			$fileName = $row;

			$basename = basename($fileName);

			array_push($this->downData, [
				'name' => $fileName, 
				'base' => $basename
					]);
		}

		return $this->downData;
	}

}


?>
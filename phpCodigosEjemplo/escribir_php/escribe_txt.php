<?php 

class Escritor{
	private $nombre_archivo ="";
	private $texto ="";

	public function __construct( $nombre_archivo,$texto){
		$this->nombre_archivo = $nombre_archivo;
		$this->texto = $texto;
	}

	public function setTexto($texto){
		$this->$texto;
	}

	public function escribe(){
		$this->creaArcivo();
	}


	private function creaArcivo(){
		$archivo = fopen($this->nombre_archivo, "a");
		fwrite($archivo, date("Ymd H:m:s"). " ". $this->texto. "\r\n");
		fclose($archivo);
	}



}



?>
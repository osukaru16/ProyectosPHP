<?php 
//creo que no va porque se ejecuta en un servidor php 5.2.17



class Escritor{
	private $nombre_archivo ="";
	private $texto ="";

	public function __construct( string  $nombre_archivo, string $texto){
		$this->nombre_archivo = $nombre_archivo;
		$this->texto = $texto;
	}

	public function setTexto(string $texto){
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
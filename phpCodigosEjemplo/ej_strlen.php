<?php
class CuentaLetras{
	private $palabra="";



	public function __construct($palabra){
		$this->palabra = $palabra;
	}

	public function getPalabra(){
		return $this->palabra;
	}




	public function getNumeroLetras(){
		return strlen($this->getPalabra()); //strlen funcion propia de php
	}

}


$palabra = new CuentaLetras("supercalifragilisticoespialidoso");

echo "La palabra ".$palabra->getPalabra()." tiene ".$palabra->getNumeroLetras()." letras";

//supercalifragilisticoespialidoso

?>
<?php
class Palabras{
	private $palabras = array("neko","inu","kitsune","kamome","tora","kame","hotaru","shimauma","uma");

	public function getPalabraAzar(){
		$azar = rand(0,count($this->palabras)-1);
		return $this->palabras[$azar];
	}
}

//$palabras = new Palabras();

//echo $palabras->getPalabraAzar();



?>
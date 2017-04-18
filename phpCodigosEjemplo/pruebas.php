<?php


class Cliente{ 
   	var $nombre; 
   	var $numero; 
   	//var $peliculas_alquiladas; 

   	public function __construct($nombre,$numero){ 
      	$this->nombre=$nombre; 
      	$this->numero=$numero; 
      	//$this->peliculas_alquiladas=array(); 
   	} 

   	public function dame_numero(){ 
      	return $this->numero; 
   	} 

      public function dame_nombre(){ 
         return $this->nombre; 
      } 
}






$prueba = new Cliente("Neko", 150);


echo $prueba->dame_nombre();









?>
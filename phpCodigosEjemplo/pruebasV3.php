<?php


class Cliente{ 
   	private $nombre; 
   	private $numero; 
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





$cliente1 = new Cliente("Mike", 150); 
$cliente2 = new Cliente("Neko", 564); 

//mostramos el numero de cada cliente creado 
echo "El identificador del cliente 1 es: " . $cliente1->dame_numero() ."<br/>"; 
echo "De nombre: " . $cliente1->dame_nombre() ."<br/>"; 
echo "El identificador del cliente 2 es: " . $cliente2->dame_numero() ."<br/>";
echo "De nombre: " . $cliente2->dame_nombre() ."<br/>"; 






?>
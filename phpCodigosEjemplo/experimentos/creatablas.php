<?php  

class CreaTabla{
	private $num_fila = 0; //td fila
	private $num_columna = 0; //tr columna

	public function __construct($num_fila, $num_columna){
		$this->num_fila = $num_fila;
		$this->num_columna = $num_columna;
	}



	private function crearTabla($dato){
		$texto ="<table>";
		for($i=0; $i<$this->num_fila; $i++){
			//$texto += "x";

			

			$texto .= "<tr>";

			 for($j=0; $j<$this->num_columna; $j++){
			 	$texto .= "<td>".$dato."</td>";
			 }
			 $texto .= "</tr>";
		}
		$texto .= "<table/>";
		return $texto;
	}


	public function getTabla($dato){
		return $this->crearTabla($dato);
	}


}





/*
$palabra="x";
for($i=0; $i<10; $i++){
	$palabra .= "x";


}

echo $palabra;

*/


?>


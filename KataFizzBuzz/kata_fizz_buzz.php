<?php

/**
* 
*/
class FizzBuzz
{
	private $numero=0;

/*
	public function __construct()
	{
		# code...
	}
*/

	public function setNumero($numero){
		$this->numero = $numero;

	}


	public function getNumero(){
		return $this->numero;

	}




	public function getTipo(){
		return $this->buscaTipo();
	}


	private function buscaTipo(){
		if(($this->esFizz())&&($this->esBuzz())){
			return "FizzBuzz";
		}
		elseif($this->esFizz()){
			return "Fizz";
		}
		elseif($this->esBuzz()){
			return "Buzz";
		}

		return "";
	}



	private function esFizz(){
		if($this->numero % 3 == 0){
			return true;
		}
		return false;
	}


	private function esBuzz(){
		if($this->numero % 5 == 0){
			return true;
		}
		return false;
	}







}







$numeros = new FizzBuzz();


for ($i = 0; $i < 1000; $i++){
	$numeros->setNumero($i);

	echo "El numero: ".$numeros->getNumero() ." ".$numeros->getTipo() ."<br/>";
}



?>
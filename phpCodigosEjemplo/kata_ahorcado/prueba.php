<?php

include "cuenta_letras.php";
include "palabras.php";

$palabras = new Palabras();


$palabra = new CuentaLetras($palabras->getPalabraAzar());

//$palabra = new CuentaLetras("supercalifragilisticoespialidoso");

//echo "La palabra ".$palabra->getPalabra()." tiene ".$palabra->getNumeroLetras()." letras";


for ($i=0; $i<$palabra->getNumeroLetras(); $i++){
	echo "_ ";
}




?>
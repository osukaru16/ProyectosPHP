<?php

include "cuenta_letras.php";


$palabra = new CuentaLetras("supercalifragilisticoespialidoso");

//echo "La palabra ".$palabra->getPalabra()." tiene ".$palabra->getNumeroLetras()." letras";


for ($i=0; $i<$palabra->getNumeroLetras(); $i++){
	echo "_ ";
}




?>
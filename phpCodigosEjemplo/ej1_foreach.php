<?php
$array = array(1, 2, 3, 4);
foreach ($array as &$valor) {    //Nota se ve que en php 7 funcionaria distinto este codigo
	echo $valor."<br/>";
   // $valor = $valor * 2;
    // echo $valor."<br/>";
}
// $array ahora es array(2, 4, 6, 8)
echo "________<br/>";
echo $valor."<br/>";
unset($valor); // rompe la referencia con el último elemento
echo $valor."<br/>";
?>
<?php
$a=array("red","green");
array_push($a,"blue","yellow");
$contador = rand(0,count($a)-1);
echo $a[$contador]." ".$contador;
?>
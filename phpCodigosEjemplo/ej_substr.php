<?php
$a = substr("abcdef", -1);    // devuelve "f"
$s = substr("abcdef", -2);    // devuelve "ef"
$d = substr("abcdef", -3, 1); // devuelve "d"


echo $a."<br/>";
echo $s."<br/>";
echo $d."<br/>";


?>
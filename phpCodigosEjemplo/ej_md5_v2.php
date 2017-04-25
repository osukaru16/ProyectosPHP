<?php
$str = 'apple';

echo "Palabra usada: ".$str."<br/>";

echo "Palabra con el md5: ".md5($str)."<br/>";

echo "Palabra md5 con md5: ".md5(md5($str))."<br/>";
?>
<?php
$string = <<<XML
<a>
 <b>
  <c>texto</c>
  <c>cosas</c>
 </b>
 <d>
  <c>código</c>
 </d>
</a>
XML;

$xml = new SimpleXMLElement($string);

/* Busca <a><b><c> */
$resultado = $xml->xpath('/a/b/c');

//while(list( , $nodo) = each($resultado)) {
foreach ($resultado as &$nodo) {
    echo $nodo."<br/>";
}
/*
// Rutas relativas también funcionan... 
$resultado = $xml->xpath('/a');

while(list( , $nodo) = each($resultado)) {
    echo $nodo."<br/>";
}*/
?>
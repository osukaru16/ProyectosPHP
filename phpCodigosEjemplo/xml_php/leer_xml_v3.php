<?php
// Continuación del ejemplo XML anterior.

/* Buscar <a><b><c> */
$xml = new SimpleXMLElement('preguntas.xml', null, true);


$resultado = $xml->xpath('/questions/question/type/title/options/answer');

//while(list( , $nodo) = each($resultado)) {
foreach ($resultado as &$nodo) { 
    echo $nodo->asXML(); // <c>texto</c> and <c>cosas</c>
}
?>
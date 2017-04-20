<?php
// El fichero test.xml contiene un documento XML con un elemento raíz y, al
// menos, un elemento /[raiz]/titulo.
$xml = new SimpleXMLElement('preguntas.xml', null, true);
$order   = array("radio", "checkbox", "text", "select", "multiple");

//echo $xml->asXML();


$newstr = str_replace($order, "<br/>", $xml->asXML());

echo $newstr."<br/>";
 

?>
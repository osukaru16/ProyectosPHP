<?php
$string = <<<XML
<?xml version='1.0'?> 
<document>
 <title>¿Cuarenta qué?</title>
 <from>Joe</from>
 <to>Jane</to>
 <body>
  Sé que esa es la respuesta pero, ¿cuál es la pregunta?
 </body>
</document>
XML;

$xml = simplexml_load_string($string);

print_r($xml);
?>
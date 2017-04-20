<?php
// El fichero test.xml contiene un documento XML con un elemento raíz y, al
// menos, un elemento /[raiz]/titulo.

if (file_exists('preguntas.xml')) {
    $xml = simplexml_load_file('preguntas.xml');
 
    print_r($xml);
} else {
    exit('Error abriendo preguntas.xml.');
}
?>
<?php
//echo "Prueba";

define("CONSTANTE", "Hola mundo.");
echo CONSTANTE."<br/>"; // imprime "Hola mundo."
echo Constante."<br/><br/>"; // imprime "Constante" y emite un aviso.

define("SALUDO", "Hola tú.", true);
echo SALUDO."<br/>"; // imprime "Hola tú."
echo Saludo; // imprime "Hola tú."

// Funciona a partir de PHP 7
/*
define('ANIMALES', array(
    'perro',
    'gato',
    'pájaro'
));
echo ANIMALES[1]; // muestra "gato"
*/
?>
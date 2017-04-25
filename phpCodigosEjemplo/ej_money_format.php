<?php

$number = 1234.56;

// muestra el formato internacional para la configuración regional en_US
setlocale(LC_MONETARY, 'en_US');
echo money_format('%i', $number) . "\n";
// USD 1,234.56

// formato nacional italiano con 2 decimales`
setlocale(LC_MONETARY, 'it_IT');
echo money_format('%.2n', $number) . "\n";
// Eu 1.234,56

// utilizando un número negativo
$number = -1234.5672;

// formato nacional US, utilizando () para los números negativos
// y 10 dígitos de precisión a la izquierda
setlocale(LC_MONETARY, 'en_US');
echo money_format('%(#10n', $number) . "\n";
// ($        1,234.57)

// formato similar que el anterior, agregando el uso de 2 dígitos de precisión
// a la derecha y '*' como caracter de relleno
echo money_format('%=*(#10.2n', $number) . "\n";
// ($********1,234.57)

// justificado a la izquierda, con 14 posiciones de ancho, 8 dígitos de
// precisión a la izquierda, 2 de precisión a la derecha, sin caracter de agrupamiento
// y utilizando el formato internacional para la configuración regional de_DE.
setlocale(LC_MONETARY, 'de_DE');
echo money_format('%=*^-14#8.2i', 1234.56) . "\n";
// Eu 1234,56****

// añadir un poco de propaganda antes y después los especificación de conversión
setlocale(LC_MONETARY, 'en_GB');
$fmt = 'The final value is %i (after a 10%% discount)';
echo money_format($fmt, 1234.56) . "\n";
// The final value is  GBP 1,234.56 (after a 10% discount)

?>
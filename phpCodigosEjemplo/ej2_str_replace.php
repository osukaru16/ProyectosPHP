<?php
// Orden del reemplazo
$str     = "Line 1\nLine 2\rLine 3\r\nLine 4\n";
$order   = array("\r\n", "\n", "\r");
$replace = '<br />';

// Procesa primero \r\n así no es convertido dos veces.
$newstr = str_replace($order, $replace, $str);

echo $newstr."<br/>";

// La salida es F debido a que A es reemplazada con B, entonces B es reemplazada con C, y así sucesivamente...
// Finalmente E se reemplaza con F, debido a los reemplazos de izquierda a derecha.
$search  = array('A', 'B', 'C', 'D', 'E');
$replace = array('B', 'C', 'D', 'E', 'F');
$subject = 'A';
echo str_replace($search, $replace, $subject)."<br/>";

// La salida es: apearpearle pear
// Por la misma razón mencionada arriba
$letters = array('a', 'p');
$fruit   = array('apple', 'pear');
$text    = 'a p';
$output  = str_replace($letters, $fruit, $text);
echo $output."<br/>";
?>
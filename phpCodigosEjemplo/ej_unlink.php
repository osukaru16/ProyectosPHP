<?php
$fh = fopen('prueba.html', 'a');
fwrite($fh, '<h1>¡Hola mundo!</h1>');
fclose($fh);

if (unlink('prueba.html')){
	echo "archivo eliminado";
}
else{
	echo "archivo no eliminado";
}
?>
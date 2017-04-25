<?php
if (!is_dir('mike')) {
    mkdir('mike');
}


if (rmdir('mike')) {
	echo "archivo eliminado";
}
else{
	echo "archivo no eliminado";
}


//veo que en php 5.2.17 rmdir te permite borrar archivos para los que no tienes permisos creado con mkdir.
?>
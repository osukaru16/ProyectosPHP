<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include "creatablas.php";



$tabla = new CreaTabla(5,5);

echo $tabla->getTabla("MikeNeko");
?>
</body>
</html>
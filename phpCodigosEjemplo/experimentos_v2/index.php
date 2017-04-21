<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include "creatablas.php";



$tabla = new CreaTabla(6,7);

$tabla2 = new CreaTabla(1,1);


echo $tabla->getTabla($tabla2->getTabla("6"));
?>
</body>
</html>
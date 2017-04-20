 <!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
  #contenedor{ margin:auto; width: 30%; height: 50%; background-color: #CCC;}
</style>

</head>
<body>
<div id="contenedor">
<?php 
echo "Hola ".htmlspecialchars($_POST['nombre']); 
echo "Usted tiene ".(int)$_POST['edad']." años."; 
?>




<form action="ej2.php" method="post">
 <p>Su nombre: <input type="text" name="nombre" /></p>
 <p>Su edad: <input type="text" name="edad" /></p>
 <p><input type="submit" /></p>
</form>
</div>
</body>
</html>


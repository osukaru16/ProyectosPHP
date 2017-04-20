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
echo htmlspecialchars($_POST['nombre']); 

?>




<form action="ej2.php" method="post">
 <p><input type="text" name="nombre" /></p>
 <p><input type="submit" /></p>
</form>
</div>
</body>
</html>


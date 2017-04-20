<?php 
echo "Hola ".htmlspecialchars($_POST['nombre']); 
echo "Usted tiene ".(int)$_POST['edad']." años."; 

?> 




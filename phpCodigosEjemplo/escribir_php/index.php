<?php 
 
    
     
    $nombre_archivo = "logs.txt"; 
 
    if(file_exists($nombre_archivo))
    {
        $mensaje = "El Archivo $nombre_archivo se ha modificado";
    }
 
    else
    {
        $mensaje = "El Archivo $nombre_archivo se ha creado";
    }
 
    if($archivo = fopen($nombre_archivo, "a"))
    {
        if(fwrite($archivo, date("Ymd H:m:s"). " ". $mensaje. "\r\n"))
        {
            echo "Se ha ejecutado correctamente";
        }
        else
        {
            echo "Ha habido un problema al crear el archivo";
        }
 
        fclose($archivo);
    }


//Esto es una prueba aparte de la clase Escritor


include "escribe_txt.php";


$escritor = new Escritor("archivo.txt","neko");
echo $escritor->escribe();

for ($i=0; $i<10; $i++){
  $escritor->setTexto("".$i);
  echo $escritor->escribe();
}













?>
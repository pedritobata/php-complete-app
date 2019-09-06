<?php

//OJO **** Hay que configurar el parametro upload_max_filesize para que acepte mas megas. Hasta 256M
////LO mismo para el post_max_size
//Para esto hay que ir al wamp manager

//Obtenemos el archivo subido
$archivo = $_FILES['archivo'];
//el objeto archivo obtenido resulta ser un Array también!!!
//obtenemos parámetros
$nombre = $archivo['name'];
$tipo = $archivo['type'];
$temp_name = $archivo['tmp_name'];//con este nombre se ha guardado el archivo como temporal en mi servidor

//valido que el archivo sea solo un tipo de imagen, porque solo eso quiero subir!!
if($tipo == 'image/jpeg' || $tipo == 'image/jpg'
   || $tipo == 'image/png' || $tipo == 'image/gif'){
    
    if(!is_dir('./imagenes')){
        mkdir('./imagenes', 0777);
    }
    
    //muevo el archivo desde el temporal hasta el directorio que creé
    move_uploaded_file($temp_name, "./imagenes/$nombre");
    
    //redirecciono asincronamente con un delay de 4 segundos
    header("Refresh: 4; URL=./index.php");
    //puedo pintar un mensaje mientras no se terminan los 4 segundos
    echo "<h1>Imagen subida correctamente!!</h1>";
    
}else{
    header("Refresh: 4; URL=./index.php");
    echo "<h1>La imagen no es del formato correcto...</h1>";
}

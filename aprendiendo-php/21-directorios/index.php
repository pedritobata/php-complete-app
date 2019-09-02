<?php

//Crear una carpeta si no existe antes
$dir = "mi_carpeta";
if(!is_dir($dir)){
    //el segundo parametro de mkdir son los permisos, tipo Linux
    mkdir($dir, 777);
    echo "Carpeta '$dir' creada con éxito!!";
}else{
    echo "Ya existe la carpeta '$dir'";
}

//Borrar directorios
//rmdir($dir);

echo "<h1>Mis archivos en PHP Master</h1>";
if($gestor = opendir("..")){
    while(false !== ($archivo = readdir($gestor))){
        if($archivo !== '.' && $archivo !== '..'){
            echo $archivo."<br>";
        }
        
    }
}



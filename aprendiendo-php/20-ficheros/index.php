<?php

//php maneja los archivos parecido a Linux

//El segundo parámetro es para qué se abrirá el archivo: r es lectura, w es escritura y x es ejecución; a+ es w y r

//Creamos una referencia al archivo y lo abrimos
$archivo = fopen("fichero_texto.txt", 'a+');

//Recorro el archivo y leo linea por linea
while(!feof($archivo)){
    $linea = fgets($archivo);
    echo $linea."<br>";
}

//Escribir dentro del archivo
fwrite($archivo,"<br>Soy un texto insertado programáticamente<br>");


//cerramos el archivo!!
fclose($archivo);

//Copiar un archivo   origen , destino
//copy("fichero_texto.txt", "copia.txt") or die("Mancó la copia!!");

//renombrar  un archivo  old, new
//rename("copia.txt", "Copionazo.txt");

//Comprobar si existe un archivo
if(file_exists("fichero_texto.txt")){
    echo "El archivo fichero_texto sí existe!!";
}

//eliminar un archivo
unlink("Copia.txt") or die("El archivo ya no se llama Copia.txt!!");




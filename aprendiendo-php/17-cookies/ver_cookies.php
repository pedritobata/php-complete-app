<?php

/* 
   Para mostrar el valor de las cookies usamos la variable superglobal :
 */

if(isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1>";
}

if(isset($_COOKIE['oneyear'])){
    echo "<h1>".$_COOKIE['oneyear']."</h1>";
}
?>

<a href="crear_cookies.php">Crear cookies</a>
<a href="borrar_cookies.php">Borrar cookies</a>




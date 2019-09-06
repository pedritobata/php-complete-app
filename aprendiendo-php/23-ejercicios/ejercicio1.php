<?php

/* 
   Ejercicio 1.  Crear una variable de sesión que guarde un número cuyo valor aumentará
 * o disminuirá en 1 de acuerdo a un parámetro counter que llegará por URL como 1 (aumentar) o 0 (disminuir)
 */

session_start();

if(!isset($_SESSION['numero'])){
    $_SESSION['numero'] = 0;
}

if(isset($_GET['counter']) && $_GET['counter'] == 1){
    $_SESSION['numero']++;
}

if(isset($_GET['counter']) && $_GET['counter'] == 0){
    $_SESSION['numero']--;
}
   


?>

<h1>El valor del número es <?=$_SESSION['numero']?></h1>

<a href="./ejercicio1.php?counter=1">Aumentar el valor</a><br>
<a href="./ejercicio1.php?counter=0">Disminuir el valor</a>


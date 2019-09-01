<?php  

/* 
     SESSIONES
 *   Las sesiones pueden almacenar buena cantidad de informacion del usuario en el servidor
 *   y la persiste durante toda la navegacion que haga dicho usuario
 *   son seguras porque solo existen en el sevidor
 *   Cuando el usuario cierra el browser la sesión se elimina
 */

define('salto','<br>');

//Iniciamos sesion
session_start();
 //Variable local
$variable_normal = "Soy una cadena de texto";

//variable de sesion
$_SESSION['variable_persistente'] = "HOLA SOY UNA VARIABLE DE SESION ACTIVA";

echo $variable_normal.salto;
echo $_SESSION['variable_persistente'].salto;








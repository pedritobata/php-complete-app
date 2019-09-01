<?php

/* 
    COOKIES
 *  Son ficheros que se alamacenan en el disco duro del cliente y almacena datos del usuario
 *  esta info se usa para rastrear info sobre el comportamiento del usuario en una pagina web
 */

// Creamos la cookie
// la cookie solo puede almacenar texto
//setcookie(nombre de la cookie, contenido en texto, caducidad, ruta, dominio)

//cookie básica
setcookie("micookie","Soy una cookie bien bacán");

//Cookie con caducidad de un año por ejemplo (salvo que la borre antes)
setcookie("oneyear","Soy una cookie y solo duro 1 año", time() + (60*60*24*365));

//redirijo a otra pagina
header("Location:ver_cookies.php");
?>





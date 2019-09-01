<?php

if(isset($_COOKIE['oneyear'])){
    unset($_COOKIE['oneyear']);
    //a parte hay que expirarla
    setcookie('oneyear','',time()-100);
}

//puedo redirigir directamente a otra pagina
header("Location:ver_cookies.php");

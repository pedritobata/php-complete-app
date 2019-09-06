<?php

/* 
  Ejercicio 2.   
 * 1. Crear una función
 * 2. validar un email con filter_var
 * 3. Obtener el email por url
 * 4. Mostrar el resultado de la validación
 */

function validarEmail($email){
    $result = 'No válido.';
    if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result = "Válido";
    }
    
    return $result;
}


if(isset($_GET['email'])){
    echo validarEmail($_GET['email']);
}else{
    echo "Pasar un email por la url..";
}


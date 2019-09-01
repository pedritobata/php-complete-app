<?php
   
   /*
      TIPOS DE DATOS:
        Enteros
        Coma flotante o decimales 
        Cadenas o String : pueden ir entre comillas simples o dobles
        booleanos : pueden ser 0, 1 , true , false
        tipo null
        Array
        Objetos
   
    */


  $numero = 100;  //integer
  $decimal = 3.45;  //double
  $cadena = 'Hola'; // string
  $bool = false; // para false no muestra nada el echo , si es true muestra 1
  $camelCase = 'camel';//creo que mas se usa por convencion el underscore en vez del camel case
  
  
  echo gettype($numero).'<br>';
  echo gettype($decimal).'<br>';
  
  //las comillas dobles se comportan como los backticks de JS!!!!
  $texto = "Este es un numero: \"$numero\"";
  
  echo $texto.'<br>';
  
  //Para debuggear
  $mi_nombre = 'Perico';
  var_dump($mi_nombre);//con esto me muestra en el navgegador las caracteristicas de la variable
  

?>


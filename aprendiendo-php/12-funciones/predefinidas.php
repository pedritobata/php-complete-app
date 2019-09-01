<?php

  define('salto', '<br>');

// Para debuggear
  $nombre = "Perico";
  var_dump($nombre);
  
// Para fechas hay un montón. Basta con ver al Ctrl + Barra que ofrece NetBeans
  //Chekear tambien la documentacion de PHP en php.net
  
  echo date('d-m-Y');
  echo salto;
  echo time();
  echo salto;
  
//Matematicas
  echo "Raiz cuadrada de 100 : ".sqrt(100).salto;
  echo "Numero aleatorio entre 10 y 40: ". rand(10, 40).salto;
  echo "Numero Pi: ".pi().salto;
  echo "Redondear Pi: ".round(pi()).salto;
  echo "Redondear Pi a tres decimales: ".round(pi(), 3).salto;
  
// Mas funciones generales
  echo gettype($nombre).salto;
   //comprobar tipos: funciones "is.."
    if(is_string($nombre)){
        echo "La variable nombre es un String".salto;
    }

    if(is_float(pi())){
        echo "La variable Pi es un float".salto;
    }
  
    // La funcion isset() indica si una variable existe en mi programa o no
    if(!isset($edad)){
        echo "La variable no existe!";
    }
    
    /* Funciones para Strings: */
    $cadena = "   contenido   ";
    echo trim($cadena).salto;
     // Comprobar variable vacía, false o null : para estos casos empty() resuelve a false!
    //$texto = "";
    //$texto = false;
    $texto = NULL;
    if(empty($texto)){
        echo "La variable \$texto está vacía".salto;
    }
    //longitud de una cadena
    echo strlen($cadena).salto;
    
    //encontrar caracter o cadena dentro de otra cadena:
    $frase2 = "La vida es bella, que vida tan bella!!";
    echo "Se encontró la palabra vida en la posicion: ".strpos($frase2, 'vida').salto;//solo evalua primera ocurrencia
    echo "Si no existe la subcadena devuelve vacío: ".strpos($frase2, "Perico").salto;
    
    //Reemplazar strings dentro de otros: en este caso reemplazo vida por chicha
    echo "Texto reemplazado : ".str_replace("vida", "chicha", $frase2).salto;//reemplaza todas las ocurrencias
    
    // Mayusculas y Minusculas
    echo strtolower($frase2).salto;
    echo strtoupper($frase2).salto;
    
    
    
    
    
    
    //Eliminar variables o indices de Arrays
    $year = 2020;
    unset($year);
    //var_dump($year);
    
   
   
   

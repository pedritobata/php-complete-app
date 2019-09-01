<?php

/* 
 * FUNCIONES
 */

define('salto', '<br>');
  // Ejemplo 1
  function muestraNombres(){
      echo "Perico Martinez".salto;
      echo "Fernando Ferreyra".salto;
      echo "Walter Ferreyra".salto;
      echo "Danielin Trigoso".salto;
  }
  muestraNombres();
  echo "<hr>";
  // Ejemplo 2
  function tabla($numero){
     echo "<h3>Tabla de multiplicar del $numero</h3> ".salto;
     for($i=1; $i<=12; $i++){
         $producto = $i * $numero;
         echo "$numero x $i = $producto".salto;
     }
   
  }
  
  //Si no valido $_GET['numero'] me da error, así el resultado sea null que supuestamente es un valor
  //que podría validar como if($num != null)..pero NO!!!
  $num = isset($_GET['numero']) ? $_GET['numero']: 0 ;
  //echo gettype($num);
  if($num){
      tabla($num);
  }else{
      echo "Ingresar número para la tabla de multiplicar";
  }
  
    echo "<hr>";
  
  // Ejemplo 3
  function calculadora($numero1, $numero2){
      //bla bla bla
  }
  
  // Ejemplo 4 - Con parámetros opcionales
  
  function calculadora2($numero1, $numero2, $negrita = false){
      $suma = $numero1 + $numero2;
      $resta = $numero1 - $numero2;
      $multi = $numero1 * $numero2;
      $divi = $numero1 / $numero2;
      
      echo "<h3>Calculadora</h3>";
      echo $negrita?"<strong>":"";
      echo "Suma: $suma".salto;
      echo "Resta: $resta".salto;
      echo "Multiplicación: $multi".salto;
      echo "División: $divi".salto;
      echo $negrita?"</strong>":"";
      
  }
  
  calculadora2(30, 45);
  calculadora2(30, 45, true);
  
  echo salto;
  
  //Funciones con valor de retorno
  function devuelveNombre($nombre){
      return "el nombre es : ".$nombre;
  }
  
  echo devuelveNombre("Perico").salto;
  //para acumular texto existe el operador .=
  //por ejemplo $cadena .= $nuevoTexto 
  
  
  /*  FUNCIONES INVOCADAS DENTRO DE OTRAS  */
  
    //Ejemplo
    function devuelveNombre2($nombre, $apellidos){
        $texto = devuelveNombre($nombre)
                .salto."Los apellidos son: $apellidos";
        return $texto.salto;
    }
    
    echo devuelveNombre2("Tato", "Martinez");
    
  

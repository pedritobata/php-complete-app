<?php

/* 
 * Ejercicio 4. Recojer dos numeros por la url y hacer todas las operaciones basicas
 * de una calculadora: suma , resta , multi y divi
 */

  define('salto','<br>');

  if(isset($_GET['numero1']) && isset($_GET['numero2'])){
      $numero1 = $_GET['numero1'];
      $numero2 = $_GET['numero2'];
      
      echo "<h1>Calculator</h1>".salto;
      echo "<h3>Numero1 = $numero1, Numero2=$numero2</h3>".salto;
      
      echo "<p>Suma: ".($numero1 + $numero2)."</p>".salto;
      echo "<p>Resta: ".($numero1 - $numero2)."</p>".salto;
      echo "<p>Multiplicación: ".($numero1 * $numero2)."</p>".salto;
      echo "División: ".($numero1 / $numero2)."</p>".salto;
      
  }else{
      echo "<p>Ingresar los parámetros correctamente</p>".salto;
  }


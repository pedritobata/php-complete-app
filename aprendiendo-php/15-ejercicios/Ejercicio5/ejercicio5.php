<?php

/* 
  Ejercicio 5.  Crear un script de PHP que muestre una tabla con películas o series de acuerdo a lo siguiente:
 *   ACCION              AVENTURA               DEPORTES
 *   Die Hard            Indiana Jones          Futbol en América
 *   Bloody Sport        Congo                  Al ángulo
 *   Maximum Speed       Era del hielo          Después de todo
 * 
 *   la cabecera y las filas deben ir en includes separados!! 
 */

    $tabla = array(
      "ACCION"    => array("Die Hard","Bloody Sport","Maximum Speed") ,
      "AVENTURA"  => array("Indiana Jones","Congo","Era del hielo"),
      "DEPORTES"  => array("Futbol en América","Al ángulo","Después de todo")
    );

    $cabecera = array_keys($tabla);
   
    
 ?>
<h1>Tabla de Pelis</h1>
<table border=1>
   <?php 
      require_once './cabecera.php';
      require_once './filas.php';
   ?>
   
</table>


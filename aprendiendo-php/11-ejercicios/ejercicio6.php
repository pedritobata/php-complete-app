<?php

/* 
 * Ejercicio 6. Mostrar una tabla HTML con las tablas de multiplicar del 1 al 10
 */

   echo "<h1>Tablas de multiplicar</h1>";
   
   echo "<table border='1'>";
    //cabecera
   echo "<tr>";
     for($cabecera=1; $cabecera <= 10; $cabecera++){
         echo "<td>Tabla del $cabecera</td>";
     }  
   
   echo "</tr>";
   
   //Cuerpo
   echo "<tr>";
     for($i=1; $i<=10; $i++){
         echo "<td>";
            for($j=1; $j <= 12; $j++){
                echo "$i x $j = ".($i * $j)."<br>";
            }
         echo "</td>";
     }
     
   echo "</tr>";
   
   
   
   echo "</table>";

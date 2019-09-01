<?php

   //Operadores Aritméticos

    $numero1 = 55;
    $numero2 = 33;
    define('salto','<br>');
    
    echo "suma: ".($numero1 + $numero2).salto;
    echo "resta: ".($numero1 - $numero2).salto;
    echo "producto: ".($numero1 * $numero2).salto;
    echo "division: ".($numero1 / $numero2).salto;
    echo "resto: ".($numero1%$numero2).salto;
    
    

    //Operadores incremento y decremento
    
    $year = 2019;
    $year++;
    $year--;
    ++$year;
    
    echo "<h1>$year</h1>";
    echo "<h2>".--$year."</h2>";
    echo "<h2>".$year--."</h2>";
    
    //Operadores de asignacion
    $edad = 54;
    $edad += 5;
    $edad -= 5;
    $edad *= 5;
    $edad /= 5;
    
    
    
    

?>


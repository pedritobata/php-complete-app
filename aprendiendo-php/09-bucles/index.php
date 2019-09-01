<?php

  define('salto', '<br>');
  define('raya','<hr>');

//WHILE
    $numero = 20;
    while($numero <= 100){
        echo $numero;
        if($numero != 100){
            echo ", ";
        }else{
            echo ".";
        }
        $numero++;
    }

    echo salto;
    echo raya;
    
   //Ejemplo
    if(isset($_GET['numero'])){
        $numero = (int) $_GET['numero'];
    }else{
        echo "cayó en el default";
        $numero = 1; //'Default';
    }
    
    var_dump($numero);
    echo salto;
    echo raya;
    
    //Ejercicio : tabla de multiplicar
    echo "<h2>Tabla de multiplicar del $numero</h2>";
    $counter = 0;
    while(++$counter <= 12){
        echo "$numero x $counter = ".($numero * $counter).salto;
    }
    echo raya;
    
//DO WHILE
    $edad = 17;
    $disco = 1;
    do{
        echo "Tienes acceso a la Disco $disco".salto;
    }while($edad >= 18 && $disco++ < 10);

    echo raya;
    
    

?>


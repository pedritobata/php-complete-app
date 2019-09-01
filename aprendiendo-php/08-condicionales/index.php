<?php

     define('salto', '<br>');

   /**
    *   CONDICIONALES
    * 
    */

// IF
    $color = "rojo";
    if($color == "rojo"){
        echo "El color es rojo".salto;
    }else{
        echo "El color no es rojo".salto;
    }
    
    $numero = "2";
    //Ojo que hay coercion en PHP!!
    if($numero <> 1){
        echo "Hay coercion!".salto;
    }
    
    if($numero == 1){
        echo "Hay coercion!".salto;
    } elseif ($numero > 1) {
        echo "Coercion funciona con >".salto;
    }
    

    
    //Operadores de comparacion
    // ===, !=, <>, !==, < , > , <=, >=
    
    $edad = 20;
    
    $inferior = 18;
    $superior = 65;
    
    if($edad >= $inferior && $edad <= $superior ){
        echo "Estamos en edad laboral".salto;
    }
    
    //Otros operadores logicos: || ,  ! , and , or
    
    //Comprobamos coercion de booleanos
    $testBooleanCoercion = 10;
    if($testBooleanCoercion){
        echo "Valor $testBooleanCoercion de booleano equivale a true".salto;
    }else{
        echo "Valor $testBooleanCoercion equivale a false";
    }
    
    
 
//SWITCH
    
    echo "<hr>";
    
    $dia = 8;
    
    switch($dia){
        case 1:
            echo "LUNES";
            break;
        case 2:
            echo "MARTES";
            break;
        case 3:
            echo "MIERCOLES";
            break;
        case 4:
            echo "JUEVES";
            break;
        case 5:
            echo "VIERNES";
            break;
        default:
            echo "ES FIN DE SEMANA!";
    }
    
    echo "<hr>".salto;
    
//GOTO
    
    goto marca;
    echo "<h3>Instruccion 1</h3>";
    echo "<h3>Instruccion 2</h3>";
    echo "<h3>Instruccion 3</h3>";
    echo "<h3>Instruccion 4</h3>";
    
    $testGoto = true;
    
    //Esto tambien se lo salta el goto!
    if($testGoto){
        echo "El goto no se salta una condicional".salto;
    }
    
    marca: echo "Me salté 4 echos".salto;
    
 
    


?>


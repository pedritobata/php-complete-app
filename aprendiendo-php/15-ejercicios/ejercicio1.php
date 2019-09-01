<?php

/* 
  Ejercicio 1.  Hacer un programa que genere un array de 8 elementos enteros y haga los siguiente:
 *  - Recorrer el arreglo y mostrarlo
 *  - Ordenarlo y mostrarlo
 *  - Mostrar su longitud
 *  - Buscar un elemento en el array dinámicamente
 */

define('salto', '<br>');

echo "<h1>Ejercicio 1</h1>";

// Generar arreglo y mostrarlo
echo "<h2>Generar arreglo y mostrarlo</h2>";

function generarArreglo(){
    $result = array();
    for($i=0; $i<8; $i++){
        array_push($result, rand(1, 100));//asumo un rango para delimitar los elementos
    }
    return $result;
}

function showArray($array){
    foreach ($array as $item){
       echo "$item".salto; 
    }
}

$arreglo = generarArreglo();
showArray($arreglo);

// Ordenarlo y mostrarlo
echo "<h2>Ordenar y mostrar</h2>";
sort($arreglo);//sort modifica el arreglo y devuelve un boolean ... recordar!
showArray($arreglo);


// Mostrar longitud
$longitud = count($arreglo);
echo "<p><b>Longitud del arreglo: $longitud</b></p>";

// Encontrar un elemento
$numero = null;
if(isset($_GET['numero'])){
    $numero = $_GET['numero'];
}
echo "<h2>Buscar el número $numero en el arreglo</h2>";
$position = array_search($numero, $arreglo);
 //echo "position : ".$position;  El null se renderiza como vacío
if(!empty($position)){
    echo "<h4>El número fue encontrado en la posición $position</h4>";
}else {
    echo "<h4>El número No fue encontrado!</h4>";
}







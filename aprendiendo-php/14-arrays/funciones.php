<?php

define ('salto', '<br>');
 
/*  Funciones para arrays */

$cantantes = ['2pac','Men at work','Toto','Duran Duran','Dire Straits','A-ha'];
$numeros = [1,2,4,8,5,3];


//las funciones para ordenar arrays devuelven un boolean, pero el arreglo original 
//mantiene sus indices en el orden original (cuando el array es alfanumerico)

//ordenar arrays alfanumericos

$booleano = asort($cantantes);
var_dump($cantantes);
var_dump($booleano);
echo $cantantes[1];

//ordenar arrays numericos
//sort sí que modifica al array original!! pero sigue devolviendo un boolean
sort($numeros);
var_dump($numeros);


//Añadir un elemento a un array
$cantantes[2] = "Maluma";
//si no especifico el indice, se agregará al ultimo indice que toque
$cantantes[] = "Pat Benatar";
//si uso push, añade al final , pero tengo que decirle cual es el array que quiero 
array_push($cantantes, "Soda Stereo");
//quitar el ultimo elemento del array (ultimo indice)
array_pop($cantantes);
//quitar el elemento en un indice especifico
unset($cantantes[2]);

//sacar un indice aleatorio y pintar el elemento
echo "cantante aleatorio: ".$cantantes[array_rand($cantantes)].salto;


var_dump($cantantes);

//reversa de un array 
//para array numerico Y alfanumerico genera un nuevo array!!
$numInverso = array_reverse($numeros);
var_dump($numInverso);

$alfaInverso = array_reverse($cantantes);
var_dump($alfaInverso);


// Buscar dentro de un array. devuelve el indice
echo array_search("A-ha", $cantantes).salto;

//Tamaño del array
echo count($numeros).salto;
echo sizeof($numeros).salto;





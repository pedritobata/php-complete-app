<?php

/* 
  VARIABLES LOCALES Y GLOBALES RESPECTO DE LAS FUNCIONES
 */

define ('salto', '<br>');

$frase = "Ni los genios son tan genios , ni los mediocres tan mediocres";

echo $frase.salto;

function parafrasear(){
    //para poder acceder a la varible global o externa
    //tengo que decirlo
    global $frase;
        
    echo $frase.salto;
    //Esta variable es local a la funcion
    $year = 2019;
    echo $year.salto;
    
}

parafrasear();

/* Funciones como variables */
function buenosDias(){
    return "Hola! buenos días!!".salto;
}

function buenasTardes(){
    return "Hey! que tal tu almuerzo?".salto;
}

function buenasNoches(){
    return "A Hacer la meme!".salto;
}

//Ojo que pongo el nombre de la funcion como un string cualquiera!!
$horario = "buenasNoches";
//la vaina es cuando invoco la funcion:
echo $horario();

//Manya esto, puedo hacer una suerte de reflexion!!
//Segun el valor que le asigne a horario, invocaré una u otra funcion!!!
$horario = "Tardes";
//incluso juego con los parametros de la url
$horario = $_GET['horario'];
$miSaludo = "buenas".$horario;
echo $miSaludo();





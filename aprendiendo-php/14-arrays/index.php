<?php

/* 
     ARRAYS
 */

define('salto', '<br>');

$pelicula = "Batman";
$peliculas = array('Los Indestructibles','Star Wars', 'Spideman');

//var_dump($peliculas);

echo $peliculas[1].salto;
//si el indice no existe, bota error
echo $peliculas[5];
//a pesar del error la ejecucion continúa!!
echo $peliculas[0].salto;

//recorrer un array:
echo "<h1>Listado de Películas</h1>";
for($i=0; $i < count($peliculas); $i++){
    echo $peliculas[$i].salto;
}

//usando foreach
foreach($peliculas as $peli){
    echo $peli.salto;
}

//Definiendo array con corchetes:
$cantantes = ['Men at work','Toto','Duran Duran','Dire Straits'];
echo "<h1>Listado de Cantantes</h1>";
foreach ($cantantes as $singer){
    echo $singer.salto;
}

// Definiendo array con indices customizados(alfanumericos), osea practicamente como mapas
//mas bien parecen objetos json!!
//Asi es como funciona por ejemplo $_GET[]
$personas = array(
    "nombre" => "Fernando",
    "apellido" => "Ferreyra",
    "cargo" => "Analista Funcional"
);


echo "<h2>Datos de la Persona</h2>";
//puedo acceder a un solo elemento
echo $personas['nombre'].salto;

//ahora lo recorro
foreach ($personas as $key => $value) {
    echo $key." : ".$value.salto;
}

//Arrays multidimensionales
$contactos = array(
  array(
     "nombre" => "Raphael",
     "email" => "rapha.castaneda@equifax.com" 
  ),
  array(
     "nombre" => "Fernando",
     "email" => "fer.ferreyra@equifax.com" 
  ),
  array(
     "nombre" => "Luis",
     "email" => "luchin.rojas.com" 
  )
);

var_dump($contactos);
echo salto;

//accedo a elementos dentro del array multidimensional
echo $contactos[1]['nombre'].salto;
//recorriendo
foreach ($contactos as $key => $contacto){
    echo $contacto['email'].salto;
}






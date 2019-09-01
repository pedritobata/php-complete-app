

<?php
  //Constantes
    define('nombre', 'Pedrito');
    define('web', 'pedromartinez_goyo@hotmail.com');
    
    echo '<h1>'.nombre.'</h1>';
    echo '<h2>'.web.'</h2>';
    
    //pero puedo definir variables no constantes con el mismo nombre y seran independientes!
    $web = 'pedrom_mdj@hotmail.com';
    echo '<h2>'.$web.'</h2>';
    
    
    //Constantes predefinidas por PHP. Hay muchas!!
    echo PHP_VERSION.'<br>';
    echo PHP_OS.'<br>';
    echo __FILE__.'<br>';
    function hola(){
        echo __FUNCTION__;//esta constante me indica en qué metodo estoy
    }
    
    hola();
    
    
    
?>


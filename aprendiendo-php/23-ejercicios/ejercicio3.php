<?php

/* 
  Ejercicio 3.  Hacer una interfaz de usuario con dos inputs y 4 botones (cada uno para las 4 operaciones
 * fundamentales)
 */

$resultado = false;
$error = '';

if(!empty($_POST["n1"]) && !empty($_POST['n2'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    if(!empty($_POST['sumar'])){
        $resultado = "El resultado de la suma es ".($n1 + $n2);
    }
    if(!empty($_POST['restar'])){
        $resultado = "El resultado de la resta es ".($n1 - $n2);
    }
    if(!empty($_POST['multiplicar'])){
        $resultado = "El resultado de la multiplicación es ".($n1 * $n2);
    }
    if(!empty($_POST['dividir'])){
        $resultado = "El resultado de la división es ".($n1 / $n2);
    }
    
}else{
    $error = "Debe ingresar dos números para realizar la operación";
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Calculadora PHP</title>
    </head>
    <body>
        <h1>Calculadora PHP</h1>
        <b style="color:red"><?=$error?><br><br></b>
        
        <form action="" method="POST">
            <label for="n1" >Número 1</label><br>
            <input type="number" name="n1" /><br><br>
            
            <label for="n2">Número 2</label><br>
            <input type="number" name="n2" /><br><br>
            
            <input type="submit" value="Sumar" name="sumar" />
            <input type="submit" value="Restar" name="restar" />
            <input type="submit" value="Multiplicar" name="multiplicar" />
            <input type="submit" value="Dividir" name="dividir" />
            
        </form>
        
        <?php
          if($resultado):
               echo "<h1>$resultado</h1>";
          endif;
        ?>
       
        
    </body>
</html>


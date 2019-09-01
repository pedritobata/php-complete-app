<!doctype html>
<html>
    <head>
        <meta  charset="utf-8" >
        <title>Formulario</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <!-- Probar con GET tambien -->
        <form method="POST" action="recibir.php">
            <label for="nombre">Nombre</label>
            <input type="text"  name="nombre" /> <br><br>
            
            <label for="apellidos">Apellidos</label>
            <input type="text"  name="apellidos" /><br><br>
            
            <input type="submit" value="Enviar" >
        </form>
        
    </body>
    
    
</html>


<?php

?>

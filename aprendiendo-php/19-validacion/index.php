<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Validacion</title>
    </head>
    <body>
        <h1>Validación de formularios</h1>
        
        <?php 
           if(isset($_GET['error'])){
               $error = $_GET['error'];
               if($error == 'faltan_valores'){
                   echo '<strong style="color:red">Introduce todos los datos en los campos del '
                   . 'formulario</strong><br><br>';
               }
               
               if($error == 'nombre'){
                   echo '<strong style="color:red">Introduce bien el nombre</strong><br><br>';
               }
               
               if($error == 'pass'){
                   echo '<strong style="color:red">Introduce bien el password</strong><br><br>';
               }
               
               //etc para los demas campos!
               
           }
        
        ?>
        
        <form action="procesar-formulario.php" method="POST">
            <label for="nombre">Nombre</label><br>
            <input type="text" name="nombre"   pattern="[A-Za-z]+"/><br>
            
            <label for="apellidos">Apellidos</label><br>
            <input type="text" name="apellidos" required  pattern="[A-Za-z]+"/><br>
            
            <label for="edad">Edad</label><br>
            <input type="number" name="edad" required  pattern="[0-9]+"/><br>
            
            <label for="email">Email</label><br>
            <input type="email" name="email" required/><br>
            
            <label for="pass">Contraseña</label><br>
            <input type="password" name="pass" /><br><br><br>
            
            <input type="submit"  value="Enviar" />
            
            
        </form>
        
        
    </body>
    
    
</html>


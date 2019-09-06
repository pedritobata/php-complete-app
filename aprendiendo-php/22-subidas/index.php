<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Subir archivos</title>
    </head>
    <body>
        <h1>Subir imágenes con PHP</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file"  name="archivo"/><br><br>
            <input type="submit" value="Subir imagen"  />
        </form>
        
        <h1>Listado de imágenes</h1>
        <?php
            $gestor = opendir("./imagenes");
            
            if($gestor):
                while(($image = readdir($gestor)) !== false):
                    if($image !== '.' && $image !== '..'):
                         echo "<img src='./imagenes/$image'  width=200px /><br>";
                     endif;
                   
                endwhile;
            endif;
        
        ?>
        
    </body>
    
    
</html>


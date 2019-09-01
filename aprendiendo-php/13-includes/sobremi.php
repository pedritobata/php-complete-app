<?php 

  //include "./includes/cabecera.php";
// Tambien existe el include_once para que no permita incluir varias veces el mismo archivo
include_once './includes/cabecera.php';
include_once "./includes/cabecera.php";

// El require y require_once funcionan igual que los includes, la diferencia es que 
//con require, si el archivo no existe , el renderizado no prosigue solo bota error
//mientras que con los inculdes el renderizado mandaría un mensaje de error pero seguiría con el renderizado que falte
//require './includes/cabecera.php';
//Ojo que require_once e include_once tambien actúan entre sí, osea que despues del include_once de arriba, 
//este require_once ya no se renderizará!!
require_once './includes/cabecera.php';
require_once "./includes/cabecera.php";

?>

   <!-- Contenido -->
        <div>
            <h2>Esta es la página de inicio</h2>
            <p>Texto de prueba de la página de Sobre mi</p>
            <p>Texto recuperado del include: <?= $nombre ?></p>
        </div>
        
        
        <!-- Pie de página -->
 <?php 
   include "./includes/footer.php";
 ?>
        
    </body>
    
    
</html>
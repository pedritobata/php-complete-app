<?php
  if(!empty($_POST['nombre']) &&
          !empty($_POST['apellidos']) &&
          !empty($_POST['edad']) &&
          !empty($_POST['email']) &&
          !empty($_POST['pass'])){
      
      $error = "ok";
      $nombre = $_POST['nombre'];
      $apellidos = $_POST['apellidos'];
      $edad = (int) $_POST['edad'];
      $email = $_POST['email'];
      $password = $_POST['pass'];
      
      //Validaciones
      //nombre:
      if(!is_string($nombre) || preg_match("/[0-9]+/", $nombre)){
          $error = "nombre";
      }
      
      //apellidos:
      if(!is_string($apellidos) || preg_match("/[0-9]+/", $apellidos)){
          $error = "apellidos";
      }
      //edad:
      if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
          $error = "edad";
      }
      
      //email:
      if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
          $error = "email";
      }
      
       //password:
      if(empty($password) || strlen($password)< 5){
          $error = "pass";
      }
      
      //die();   este metodo mata la ejecucion del programa
      
  }else{
      $error = "faltan_valores";
      header("Location:index.php?error=$error");
  }
  
  
  if($error != 'ok'){
           header("Location:index.php?error=$error");
  }

?>



<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Validacion</title>
    </head>
    <body>
        <h1>Datos validados correctamente</h1>
        
        <?php  if($error == 'ok'): ?>
          <p><?= $nombre ?></p>
          <p><?= $apellidos ?></p>
          <p><?= $edad ?></p>
          <p><?= $email ?></p>
        
        <?php endif; ?>
        
        
        
    </body>
</html>

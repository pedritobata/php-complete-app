<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Formularios PHP</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label> 
            <p><input type="text" name="nombre" autofocus="autofocus" required/></p>
            
            <label for="apellido">Apellido:</label>  
            <p><input type="text"  name="apellido" minlength="5" pattern="[A-Z]*[a-z]*"/></p>
            
            <label for="boton">Botón:</label>  
            <p><input type="button"  value="Click"/></p>
            
            <label for="sexo">Sexo:</label> 
            <p>
                Hombre <input type="checkbox"  name="sexo" value="hombre" checked/>
                Mujer <input type="checkbox"  name="sexo" value="mujer"/>
            </p>
            
            <label for="color">Color:</label>  
            <p><input type="color"  name="color"/></p>
            
            <label for="fecha">Fecha:</label>  
            <p><input type="date"  name="fecha"/></p>
            
            <label for="correo">Email:</label>  
            <p><input type="email"  name="correo"/></p>
            
            <label for="archivo">Archivo:</label>  
            <p><input type="file"  name="archivo" multiple="multiple"/></p>
            
            <label for="oculto">Oculto:</label>  
            <p><input type="hidden"  name="oculto"/></p>
            
            <label for="numero">Número:</label>  
            <p><input type="number"  name="numero"/></p>
            
            <label for="pass">Password:</label>  
            <p><input type="password"  name="pass"/></p>
            
            <label for="continente">Continente:</label>  
            <p>
                Sudamérica <input type="radio"  name="continente" value="America del Sur"/>
                Europa <input type="radio"  name="continente" value="Europa"/>
                Asia <input type="radio"  name="continente" value="Asia"/>
            </p>
            
            <label for="web">Página web:</label>  
            <p><input type="url"  name="web"/></p>
            
            <label for="area">Text área:</label><br> 
            <textarea name="area"></textarea><br><br>
            
             <label for="peliculas">Películas:</label>
             <select name="peliculas">
                 <option value="Spiderman">Spiderman</option>
                 <option value="Batman" selected>Batman</option>
                 <option value="Die Hard">Die Hard</option>
                 <option value="Maximum speed">Maximum speed</option>
             </select>
            <br><br>
            
            <input type="submit" value="Enviar" />
        </form>
        
        
    </body>
</html>




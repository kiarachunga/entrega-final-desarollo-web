<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>Document</title>
</head>



<body>
    <header>¡A donar un libro! </header>

    <form id="form" class="topBefore" method="post">
            
              <input id="name" name="nombre" type="text" placeholder="Nombre">
              <input id="email" name="imagen" type="text" placeholder="url del libro">
              <textarea id="message" name="descripcion" type="text" placeholder="Descripcion"></textarea>
      <input id="submit" name="boton" type="submit" value="Guardar datos">
      <a href="principal.html">volver al inicio</a>

    
      
    </form>
    <?php 
    include ("logica/conexion.php");
    include("logica/datosDonar.php");
    ?>
    
</body>
</html>
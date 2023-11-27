<?php

include("conexion.php");

if (isset($_POST['boton'])) {
    if (strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['imagen']) >= 1 && strlen($_POST['descripcion']) >= 1) {

	    $nombre = trim($_POST['nombre']);
        $imagen = trim($_POST['imagen']);
        $descripcion = trim($_POST['descripcion']);

	    $consulta = "INSERT INTO libro ( Nombre, Descripcion, Imagen)
         VALUES ('$nombre','$descripcion','$imagen')";

	    $resultado = mysqli_query($conexion,$consulta);
	    if ($resultado) {
	    	?> <?php 
	    	echo "¡Agregaste un producto correctamente!";
          
	    } else {
	    	?> 
	    	<p class="bad">¡Error...!</p>
           <?php
	    }
    }   else {
	    	?> 
	    	<p>Debe completar los campos</p>
           <?php
    }
}





?>
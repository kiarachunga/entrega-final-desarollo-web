<?php 

include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['dni']) >= 1 && strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['email']) >= 1 && strlen($_POST['clave']) >= 1) {

	    $nombre = trim($_POST['nombre']);
	    $apellido = trim($_POST['apellido']);
        $dni = trim($_POST['dni']);
        $direccion = trim($_POST['direccion']);
        $email = trim($_POST['email']);
        $clave = trim($_POST['clave']);


	    $consulta = "INSERT INTO usuario (nombre, apellido, dni, direccion, email, clave) 
        VALUES ('$nombre','$apellido','$dni','$direccion','$email','$clave')";

	    $resultado = mysqli_query($conexion,$consulta);
	    if ($resultado) {
	    	?> 
	    	<p class="ok">¡Te registraste correctamente!</p>
           <?php
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
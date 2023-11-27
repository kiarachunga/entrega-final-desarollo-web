<?php
include 'global/config.php';
include 'global/conexion.php';
include 'Carrito.php';
include 'templates.php/cabecera.php';
?>

<?php
if($_POST){

    $total=0;
    $SID=session_id();
    $Correo=$_POST['email'];

    foreach($_SESSION['CARRITO'] as $indice=>$producto) {
        $total=$total + ($producto['CANTIDAD']);
    }

        $sentencia=$pdo->prepare("INSERT INTO `prestamo`(`ClaveTransaccion`, `Fecha`, `Correo`, `Total`, `status`) 
        VALUES (:ClaveTransaccion, NOW() ,:Correo ,:Total,'pendiente')");
        
        $sentencia->bindParam(":ClaveTransaccion",$SID );
        $sentencia->bindParam(":Correo",$Correo );
        $sentencia->bindParam(":Total",$total);

        $sentencia->execute();
        $idVenta=$pdo->lastInsertId();

        foreach($_SESSION['CARRITO'] as $indice=>$producto) {
            $sentencia=$pdo->prepare("INSERT INTO `detallePrestamo`(`ID`, `IDPRESTAMO`, `IDLIBRO`, `CANTIDAD`) 
            VALUES (NULL,:IDVENTA,:IDPRODUCTO,:CANTIDAD)");

            $sentencia->bindParam(":IDVENTA",$idVenta );
            $sentencia->bindParam(":IDPRODUCTO",$producto['ID'] );
            $sentencia->bindParam(":CANTIDAD",$producto['CANTIDAD']);
            $sentencia->execute();
        }
    //echo "<h3>".$total."</h3>";
    //para borrar todos los elementos de la tabla TRUNCATE TABLE nombreTabla

}
</body>

</html>
    
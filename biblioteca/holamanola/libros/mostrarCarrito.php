<?php

include 'global/config.php';
//include 'global/conexion.php';
include 'Carrito.php';
include 'templates.php/cabecera.php';
?>

<br>
<h3>Libros pedidos</h3>
<?php if(!empty($_SESSION['CARRITO'])){ ?>

<table class="table table-light">
    <tbody>
        <tr>
            <th width="63%" class="text-center">Descripcion</th>
            <th width="48%" class="text-center">Cantidad</th>
        </tr>
        <?php $total=0;?>
        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto) {?>
        <tr>
            <td width="60%"><?php echo $producto['NOMBRE']?></td>
            <td width="35%" class="text-center"><?php echo $producto['CANTIDAD']?></td>
            <td width="5%"> 

            <form action="" method="POST">

            <input type="hidden"
             name="id" 
             id="id" 
             value="<?php echo openssl_encrypt($producto['ID'],COD,KEY); ?>">
                <button class="btn btn-danger" 
                type="submit" 
                name="btnAccion" 
                value="Eliminar">Eliminar</button>
        
            </form>    
            
            </td> 
        </tr>
        <?php $total=$total+($producto['CANTIDAD']);?>
        <?php }?>
        <tr>
            <td colspan="3" align="right"><h3>cant LIBROS</h3></td>
            <td align="right"><h3><?php echo number_format($total);?></h3></td>
        </tr>

        
        <tr>
      
            <td colspan="5">
            <form action="pagar.php" method="post"> 
                <div class="alert alert-success"> 
                <div class="form-group">
                    <?php   $usuario = $_SESSION['username'];
                    echo "<h3> Usted $usuario realizo un prestamo  </h3>";
                    ?>
                    <label for="my-input"> Direccion: </label>
                    <input id="email" name="email" 
                    class="form-control" 
                    type="text"
                    placeholder="Ingrese el domicilio al que llegaran los libros"
                    required>

                </div> 
                <small id="emailHelp"
                class="form-text text-muted"
                >
                El producto llegara a su domicilio, en caso de algun inconveniente nos contactaremos con usted
                </small>
            </div> 
            <button class="btn btn-primary btn-lg btn-blok" type="submit"
            name="btnAccion"
            value="proceder">
                ENVIO.
            </button>
        </form>
            </td>
        </tr>



    </tbody>
</table> 
<?php }else{ ?>
    <div class="alert alert-succes">
    no hay productos seleccionados
    </div>       
<?php }?>

<?php

include 'global/config.php';
include 'global/conexion.php';
include 'Carrito.php';
include 'templates.php/cabecera.php';
?>


    <br>
  
    
        <?php if($mensaje!=""){?>
         <div class="alert alert-success">
            <?php echo($mensaje); ?>
            <!--<a href="mostrarCarrito.php" class="badge badge-success"> Ver carrito</a>-->
        </div>
        <?php }?>

        <div class="row">
            <?php
            $sentencia=$pdo -> prepare("SELECT * FROM `libro`");
            $sentencia -> execute();
            $listaProductos =$sentencia -> fetchALL(PDO::FETCH_ASSOC);
            //print_r($listaProductos); 
            ?>

            <?php foreach($listaProductos as $producto){?>
                <div class="col-3">

                <div class="card">
                    <img title=<?php echo $producto['Nombre']; ?> alt=<?php echo $producto['Nombre']; ?> class="card-img-top" src= <?php echo $producto['Imagen']; ?>
                    height="317px" >


                    <div class="card-body">
                        <span><?php echo $producto['Nombre']; ?></span>
                        <p class="card-text"><?php echo $producto['Descripcion']; ?></p>

                    <form action="" method="POST">
                    <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY); ?>">
                    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY); ?>">
                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY); ?>">

                      <button class="btn btn-primary" 
                      name="btnAccion" 
                      value="Agregar" 
                      type="submit">
                      Agregar al carrito
                      </button>  
                    </form>

                        
                    </div>
                    
                </div>
            </div>

            <?php } ?>
            
            


            
        </div>

    </div>

</body>

</html>
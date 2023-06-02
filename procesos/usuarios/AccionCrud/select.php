<?php
    include '../../../clases/Conexion.php';
    $con = new Conexion();
    $conexion = $con->conectar();
    $sql = "SELECT nombre AS nombreDelito, id_delito AS idDelito
            FROM t_cat_delitos";
    $respuesta = mysqli_query($conexion, $sql);
?>

                <?php 
                    while($mostrar = mysqli_fetch_array($respuesta)){
                ?>
                    <option value="<?echo $mostrar['idDelito']?>"> <? echo $mostrar['nombreDelito'] ?> </option>
                    
                <?php } ?>

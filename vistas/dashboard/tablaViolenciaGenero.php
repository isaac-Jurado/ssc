<?php
    include '../../clases/Conexion.php';
    $con = new Conexion();
    $año = date('Y');
    $conexion = $con->conectar();
    $sql = "SELECT 
                COUNT(id_delito) AS total,
                poblado as pueblito
    
                FROM
                t_reportes as reportes 
                    INNER JOIN 
                t_cat_poblado as p 
                    on reportes.id_poblado=p.id_poblado
            WHERE id_delito=12 AND YEAR(fecha) = $año
            GROUP BY poblado ";
    $respuesta = mysqli_query($conexion, $sql); 
?>

<table class="table table-sm dt-responsive nowrap table-dark" id="robosDataTable">
    <thead>
        <th>Poblado</th>
        <th>N Delitos</th>
    </thead>
    <tbody>
            <?php 
                while($mostrar = mysqli_fetch_array($respuesta)){
            ?>
        <tr>
            <td><?php echo $mostrar['pueblito'];?></td>
            <td><?php echo $mostrar['total'];?></td>
        
            <?php
                }
            ?>
        </tr>
    </tbody>
</table>



<?php
    include "../../clases/Conexion.php";
    $con = new Conexion();
    $conexion = $con->conectar();
    $sql = "SELECT 
    reporte.id_reporte AS idReporte,
    reporte.fecha AS fecha,
    reporte.hora AS hora,
    reporte.observaciones AS observaciones,
    delito.nombre AS nombreDelito,
    delito.id_delito AS idDelito,
    lugar.lugar_reporte AS lugarReporte,
    poblado.poblado AS pueblo,
    transAg.transporte_agresor AS transporteAg,
    transVi.transporte_victima AS transporteVi,
    sexoA.sexo_agresor AS sexoAgr,
    sexoV.sexo_victima AS sexoVi
FROM
    t_reportes AS reporte
        INNER JOIN
    t_cat_delitos AS delito ON reporte.id_delito = delito.id_delito
        INNER JOIN
    t_cat_poblado AS poblado ON reporte.id_poblado = poblado.id_poblado
        INNER JOIN
    t_cat_lugar_reporte AS lugar ON reporte.id_lugar_reporte = lugar.id_lugar_reporte
        INNER JOIN
    t_cat_transporte_agresor AS transAg ON reporte.id_transporte_agresor = transAg.id_transporte_agresor
        INNER JOIN
    t_cat_transporte_victima AS transVi ON reporte.id_transporte_victima = transVi.id_transporte_victima
        INNER JOIN
    t_cat_sexo_agresor AS sexoA ON reporte.id_sexo_agresor = sexoA.id_sexo_agresor
        INNER JOIN
    t_cat_sexo_victima AS sexoV ON reporte.id_sexo_victima = sexoV.id_sexo_victima";
    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table table-sm table-dark dt-responsive nowrap" style="width:100%" 
        id="tablaReportesDataTable">
    <thead>  
        <th>Id</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Observaciones</th>
        <th>Delito</th>
        <th>Lugar</th>
        <th>Pueblo</th>
        <th>TrnasporteAgre</th>
        <th>TransporteVict</th>
        <th>SexoAgre</th>
        <th>SexoVict</th>
        <th>Editar</th>
        <th>Editar</th>
    </thead>
    <tbody>
        <?php 
            while($mostrar = mysqli_fetch_array($respuesta)){
        ?>
        <tr>
                <td><?php echo $mostrar['idReporte'];?></td>
                <td><?php echo $mostrar['fecha'];?></td>
                <td><?php echo $mostrar['hora'];?></td>
                <td><?php echo $mostrar['observaciones'];?></td>
                <td><?php echo $mostrar['nombreDelito'];?></td>
                <td><?php echo $mostrar['lugarReporte'];?></td>
                <td><?php echo $mostrar['pueblo'];?></td>
                <td><?php echo $mostrar['transporteAg'];?></td>
                <td><?php echo $mostrar['transporteVi'];?></td>
                <td><?php echo $mostrar['sexoAgr'];?></td>
                <td><?php echo $mostrar['sexoVi'];?></td>
            <td>
                <button class="btn btn-warning btn-sm"  
                        data-toggle="modal" 
                        data-target="#modalActualizarReporte"
                        onclick="obtenerDatosUsuario(<?php echo $mostrar['idReporte'] ?>)">
                            Editar 
                </button>
            </td>
            <td>
                <button class="btn btn-danger btn-sm">
                    Eliminar
                </button>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<!-- aca va los botones -->
<script>
$(document).ready(function(){
    $('#tablaReportesDataTable').DataTable({
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf']

    });
});
</script>
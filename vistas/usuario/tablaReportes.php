
<?php
    include "../../clases/Conexion.php";
    $con = new Conexion();
    $conexion = $con->conectar();
    $sql = "SELECT 
                usuarios.id_usuario AS idUsuario,
                usuarios.usuario AS nombreUsuario,
                roles.nombre AS rol,
                usuarios.id_rol AS idRol,
                usuarios.ubicacion AS ubicacion,
                usuarios.activo AS estatus,
                usuarios.id_persona AS idPersona,
                persona.nombre AS nombrePersona,
                persona.paterno AS paterno,
                persona.materno AS materno,
                persona.fecha_nacimiento AS fechaNacimiento,
                persona.sexo AS sexo,
                persona.correo AS correo,
                persona.telefono AS telefono
            FROM
                t_usuarios AS usuarios
                    INNER JOIN
                t_cat_roles AS roles ON usuarios.id_rol = roles.id_rol 
                    INNER JOIN
                t_persona AS persona ON usuarios.id_persona = persona.id_persona";
    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table table-sm table-dark dt-responsive nowrap" style="width:100%" 
        id="tablaReportesDataTable">
    <thead>  
        <th>Delito</th>
        <th>Tiempo</th>
        <th>Fecha</th>
        <th>SexoV</th>
        <th>SexoA</th>
        <th>TransporteA</th>
        <th>TransporteV</th>
        <th>Observaciones</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
        <?php 
            while($mostrar = mysqli_fetch_array($respuesta)){
        ?>
        <tr>
                <td><?php echo $mostrar['delito'];?></td>
                <td><?php echo $mostrar['poblado'];?></td>
                <td><?php echo $mostrar['tiempo'];?></td>
                <td><?php echo $mostrar['fecha'];?></td>
                <td><?php echo $mostrar['sexoV'];?></td>
                <td><?php echo $mostrar['sexoA'];?></td>
                <td><?php echo $mostrar['transporteA'];?></td>
                <td><?php echo $mostrar['transporteV'];?></td>
                <td><?php echo $mostrar['observaciones'];?></td>
                <td>
                    <button class="btn btn-success btn-sm">
                        Cambiar password
                    </button>
            </td>
            <td>
        <?php 
            if ($mostrar['estatus'] == 1) {
        ?>
            <button class="btn btn-info btn-sm">
                Activo 
            </button>
            <?php 
            } else {
            ?>
                <button class="btn btn-info btn-sm">
                Inactivo
            </button>
            <?php 
                } 
            ?>
            </td>
            <td>
                <button class="btn btn-warning btn-sm"  
                        data-toggle="modal" 
                        data-target="#modalActualizarUsuarios"
                        onclick="obtenerDatosUsuario(<?php echo $mostrar['idUsuario'] ?>)">
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

<script>
$(document).ready(function(){
    $('#tablaReportesDataTable').DataTable();
});
</script>
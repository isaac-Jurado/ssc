<?php
    include '../../clases/Conexion.php';
    $con = new Conexion();
    $conexion = $con->conectar();
    $sql = "SELECT
            usuarios.id_usuario as idUsuario,
            usuarios.usuario as nombreUsuario,
            roles.nombre as rol,
            usuarios.id_rol as idRol,
            usuarios.id_persona as idPersona,
            persona.nombre as nombrePersona,
            persona.paterno as paterno,
            persona.materno as materno,
            persona.telefono as telefono,
            usuarios.ubicacion as ubicacion
        FROM
        t_usuarios as usuarios
            INNER JOIN
        t_cat_roles as roles on usuarios.id_rol = roles.id_rol
            INNER JOIN
        t_persona as persona on usuarios.id_persona = persona.id_persona";
    $respuesta = mysqli_query($conexion, $sql); 
?>
<table class="table table-sm dt-responsive nowrap" id="usuariosDataTable">
    <thead>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>telefono</th>
        <th>Usuario</th>
        <th>Ubicacion</th>
        <th>Rol</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
            <?php 
                while($mostrar = mysqli_fetch_array($respuesta)){
            ?>
        <tr>
            <td><?php echo $mostrar['nombrePersona'];?></td>
            <td><?php echo $mostrar['paterno'];?></td>
            <td><?php echo $mostrar['materno'];?></td>
            <td><?php echo $mostrar['telefono'];?></td>
            <td><?php echo $mostrar['nombreUsuario'];?></td>
            <td><?php echo $mostrar['ubicacion'];?></td>
            <td><?php echo $mostrar['rol'];?></td>
            <td>
                <button class="btn btn-warning" 
                        data-toggle="modal" 
                        data-target="#modalActualizarUsuarios" 
                        onclick="obtenerDatosUsuario(<?php echo $mostrar['idUsuario']?>)">
                    Editar
                </button>
            </td>
            <td>
                <button class="btn btn-danger" 
                onclick="eliminarUsuario(<?php echo $mostrar['idUsuario'] ?>)">
                    Eliminar     
                </button>
            </td>
            <?php
                }
            ?>
        </tr>
    </tbody>
</table>

<script>
    $(document).ready(function(){
        //!con esta linea ponemos en funcionamieno el datatable 
        $('#usuariosDataTable').dataTable({
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel', 'pdf']
        });
    });
</script>
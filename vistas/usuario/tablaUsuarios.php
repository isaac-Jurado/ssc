<?php
    include '../../classes/conexion.php';
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

?>
<table class="table table-sm">
    <thead>

    </thead>
    <tbody>
        <tr>

        </tr>
    </tbody>
</table>
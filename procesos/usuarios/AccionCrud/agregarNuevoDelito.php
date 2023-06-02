<?php
    $datos = array(
        "Delito" => $_POST['Delito'],
    );
    include "../../../clases/Usuarios.php";
    $Usuarios = new Usuarios();

echo $Usuarios-> agregarNuevoDelito($datos);
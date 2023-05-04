<?php

$datos = array(
    "idReporte" => $_POST['idReporte'],
    "fecha" => $_POST['fecha'],
    "hora" => $_POST['hora'],
    "observaciones" => $_POST['observaciones'],
    "nombreDelito" => $_POST['nombreDelito'],
    "LugarReporte" => $_POST['LugarReporte'],
    "pueblo" => $_POST['pueblo'],
    "transporteAg" => $_POST['transporteAg'],
    "transporteVi" => $_POST['transporteVi'],
    "sexoAgr" => $_POST['sexoAgr'],
    "sexoVi" => $_POST['sexoVi'],
);
    include "../../../clases/Usuarios.php";
    $Usuarios = new Usuarios();

echo $Usuarios-> agregarNuevoReporte($datos);
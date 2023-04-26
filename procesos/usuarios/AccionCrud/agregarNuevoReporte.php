<?php

$datos = array(
    "delito" => $_POST['delito'];
    "poblado" => $_POST['poblado'];
    "tiempo" => $_POST['tiempo'];
    "fecha" => $_POST['fecha'];
    "sexoV" => $_POST['sexoV'];
    "sexoA" => $_POST['sexoA'];
    "transporteV" => $_POST['transporteV'];
    "transporteA" => $_POST['transporteA'];
    "observaciones" => $_POST['observaciones'];
);
 include "../../../clases/Usuarios.php";
 $Usuarios = new Usuarios();

echo $Reportes-> agregarNuevoReporte($datos);
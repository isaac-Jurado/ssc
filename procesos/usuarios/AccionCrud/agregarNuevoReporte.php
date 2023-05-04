<?php
    $datos = array(
        "poblado" => $_POST['poblado'],
        "tiempo" => $_POST['tiempo'],
        "fecha" => $_POST['fecha'],
        "delito" =>$_POST['delito'],
        "lugar" => $_POST['lugar'],
        "sexoV" => $_POST['sexoV'], 
        "sexoA" => $_POST['sexoA'], 
        "transporteA" => $_POST['transporteA'],
        "transporteV" => $_POST['transporteV'], 
        "observaciones" => $_POST['observaciones']
    );
    include "../../../clases/Usuarios.php";
    $Usuarios = new Usuarios();

echo $Usuarios-> agregarNuevoReporte($datos);
<?php
    // usamos session start para poder ocupar seciones
    session_start();
    //? trea los datos del login 
    $usuario = $_POST['login'];
    //? encripta la contraseña 
    $password = sha1($_POST['password']);

    include "../../../clases/Usuarios.php";
    $Usuarios = new Usuarios();
    //? ocupa el metodo del archivo login y pasa usuario y password
    echo $Usuarios->loginUsuario($usuario,$password);
?>
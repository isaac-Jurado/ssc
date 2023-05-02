<?php
    $datos = array(
        "idUsuario"=>$_POST['idUsuario'], 
        "firstname"=>$_POST['firstnameUpdate'],   
        'lastname'=>$_POST['lastnameUpdate'],
        'name'=>$_POST['nameUpdate'],
        'number'=>$_POST['numberUpdate'],
     //!estos datos van para tabla t_usuarios
        'user'=>$_POST['userUpdate'],
        'password'=>sha1($_POST['passwordUpdate']),
        'location'=>$_POST['locationUpdate'],
     //!estos datos van para tabla t_cat_rol
        'rol'=>$_POST['rolUpdate'] 
    );

    include "../../../clases/Usuarios.php";
    $Usuarios = new Usuarios();
    echo $Usuarios->actualizarUsuario($datos);
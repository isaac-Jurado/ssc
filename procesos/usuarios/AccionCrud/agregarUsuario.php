<?php
   
    $datos = array(
     //!estos datos van para tabla t_persona
     "firstname"=>$_POST['firstname'],   
     'lastname'=>$_POST['lastname'],
     'name'=>$_POST['name'],
     'number'=>$_POST['number'],
     //!estos datos van para tabla t_usuarios
     'user'=>$_POST['user'],
     'password'=>sha1($_POST['password']),
     'location'=>$_POST['location'],
     //!estos datos van para tabla t_cat_rol
     'rol'=>$_POST['rol'] 
   );

    include "../../../clases/Usuarios.php";
    $Usuarios = new Usuarios();

    echo $Usuarios->agregarNuevoUsuario($datos);




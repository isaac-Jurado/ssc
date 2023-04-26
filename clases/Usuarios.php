<?php

  include "Conexion.php";

  class Usuarios extends Conexion{
    public function loginUsuario($usuario, $password) {
        $conexion = Conexion::conectar();
      //?aca validamos que usuario exista a lo que traiga el formulario usuario y password
      //?exista lo que trae el formulario passwor 
        $sql = "SELECT * FROM t_usuarios WHERE usuario = '$usuario' AND password = '$password'";
        $respuesta = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($respuesta) > 0) {
          $datosUsuario = mysqli_fetch_array($respuesta);
          $_SESSION['usuario']['nombre'] = $datosUsuario['usuario'];
          $_SESSION['usuario']['id'] = $datosUsuario['id_usuario'];
          $_SESSION['usuario']['rol'] = $datosUsuario['id_rol'];
          return 1;
        }else{
          return 0;
        }
    }
    
    public function agregarNuevoUsuario($datos) {
		  $conexion = Conexion::conectar();
    	$idPersona = self::agregarPersona($datos);

	   if ($idPersona > 0) {
	     $sql = "INSERT INTO t_usuarios (id_rol, 
	                                     id_persona, 
	                                     usuario, 
	                                     password, 
	                                     ubicacion)
                     VALUES (?, ?, ?, ?, ?)"; 
           $query = $conexion->prepare($sql);
           $query->bind_param("iisss", $datos['rol'],
                                       $idPersona,
                                       $datos['user'],
                                       $datos['password'],
                                       $datos['location']);
           $respuesta = $query->execute();
           return $respuesta;
         } else{
           return 0;
         }
    }

    //! se le pasa como parametro el arreglo que vine de ../procesos/usuarios/AccionCrud/agregarUsuario.php
    public function agregarPersona($datos) {
      //agregamos la conexion
      $conexion = Conexion::conectar();
      //se prepara el query para insertar
      $sql = "INSERT INTO t_persona (paterno,
                                      materno,
                                      nombre,                                      
                                      telefono)
              /* al ser una sentencia preparada se colocan los signos de interrogacion */
              VALUES (?, ?, ?, ?)";
      $query = $conexion->prepare($sql);
      //! asocia el tipo de dato con la variable que estas trabajando
      $query->bind_param("ssss", $datos['firstname'],
                                    $datos['lastname'], 
                                    $datos['name'],
                                    $datos['number']);
      $respuesta  = $query->execute();
      $idPersona = mysqli_insert_id($conexion); 
      $query->close();
      return $idPersona;
    }

    public function agregarNuevoReporte($datos){
        $conexion = Conexion::conectar();
        $sql = "";
    }
    public function obtenerDatosUsuario($idUsuario) {
      $conexion = Conexion::conectar();
      $sql = "SELECT 
                    usuarios.id_usuario AS idUsuario,
                    usuarios.usuario AS nombreUsuario,
                    roles.nombre AS rol,
                    usuarios.id_rol AS idRol,
                    usuarios.ubicacion AS ubicacion,
                    usuarios.id_persona AS idPersona,
                    persona.nombre AS nombrePersona,
                    persona.paterno AS paterno,
                    persona.materno AS materno,
                    persona.telefono AS telefono
                FROM
                    t_usuarios AS usuarios
                        INNER JOIN
                    t_cat_roles AS roles ON usuarios.id_rol = roles.id_rol 
                        INNER JOIN
                    t_persona AS persona ON usuarios.id_persona = persona.id_persona
                    AND usuarios.id_usuario = '$idUsuario'";
      $respuesta = mysqli_query($conexion, $sql);
      $usuario = mysqli_fetch_array($respuesta);
        
      $datos = array( 
          'idUsuario' => $usuario['idUsuario'],
          'nombreUsuario' => $usuario['nombreUsuario'],
          'rol' => $usuario['rol'],
          'idRol' => $usuario['idRol'],
          'ubicacion' => $usuario['ubicacion'],
          'idPersona' => $usuario['idPersona'],
          'nombrePersona' => $usuario['nombrePersona'],
          'paterno' => $usuario['paterno'],
          'materno' => $usuario['materno'],
          'telefono' => $usuario['telefono']
      );
      return $datos;
    } 
//       public function actualizarUsuario($datos) {
//           $conexion = Conexion::conectar();
//           $exitoPersona = self::actualizarPersona($datos);

//           if ($exitoPersona) {
//                 $sql = "UPDATE t_usuarios SET id_rol = ?,
//                                                 usuario = ?,
//                                                 ubicacion = ?
//                         WHERE id_usuario = ?";
//               $query = $conexion->prepare($sql);
//               $query->bind_param('issi', $datos['idRol'],
//                                           $datos['usuario'],
//                                           $datos['ubicacion'],
//                                           $datos['idUsuario']);
//               $respuesta = $query->execute();
//               $query->close();
//               return $respuesta; 

//           } else {
//               return 0; 
//           }
//       }
//       public function actualizarPersona($datos) {
//         $conexion = Conexion::conectar(); 

//         $idPersona = self::obtenerIdPersona($datos['idUsuario']);

//         $sql = "UPDATE t_persona SET paterno = ?,
//                                       materno = ?,
//                                       nombre = ?,
//                                       fecha_nacimiento = ?,
//                                       sexo = ?,
//                                       telefono = ?,
//                                       correo = ? 
//                 WHERE id_persona = ?"; 
//         $query = $conexion->prepare($sql);
//         $query->bind_param('sssssssi' , $datos['paterno'],
//                                         $datos['materno'],
//                                         $datos['nombre'],
//                                         $datos['fechaNacimiento'],
//                                         $datos['sexo'],
//                                         $datos['telefono'],
//                                         $datos['correo'],
//                                         $idPersona);
//         $respuesta = $query->execute();
//         $query->close();
//         return $respuesta;                              
//       }
//       public function obtenerIdPersona($idUsuario){
//           $conexion = Conexion::conectar();
//           $sql = "SELECT
//                       persona.id_persona AS idPersona
//                   FROM 
//                       t_usuarios AS usuarios
//                           INNER JOIN
//                       t_persona AS persona ON usuarios.id_persona =  persona.id_persona
//                           AND usuarios.id_usuario = '$idUsuario' ";
//           $respuesta = mysqli_query($conexion, $sql);
//           $idPersona = mysqli_fetch_array($respuesta)['idPersona'];
//           return $idPersona;
//       }
//
}   



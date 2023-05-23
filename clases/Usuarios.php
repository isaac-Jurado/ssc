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
  ///funcion para eliminar a los usuarios 
  public function eliminarUsuario($idUsuario){
    $conexion = Conexion::conectar();
    $sql = "DELETE FROM t_usuarios WHERE id_usuario = ?";
    $query = $conexion->prepare($sql);
    $query->bind_param('i', $idUsuario);
    $respuesta = $query->execute();
    $query->close();
    return $respuesta;  
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

  public function actualizarUsuario($datos) {
    $conexion = Conexion::conectar();
    $exitoPersona = self::actualizarPersona($datos);
    if ($exitoPersona) {
      $sql = "UPDATE t_usuarios SET id_rol = ?,
                                    usuario = ?,
                                    ubicacion = ?
              WHERE id_usuario = ?";
      $query = $conexion->prepare($sql);
      $query->bind_param('issi', $datos['rol'],
                                  $datos['user'],
                                  $datos['location'],
                                  $datos['idUsuario']);
      $respuesta = $query->execute();
      $query->close();
      return $respuesta;
      }else{
        return 0; 
      }
  }
  public function actualizarPersona($datos) {
    $conexion = Conexion::conectar(); 

    $idPersona = self::obtenerIdPersona($datos['idUsuario']);

    $sql = "UPDATE t_persona SET paterno = ?,
                                  materno = ?,
                                  nombre = ?,
                                  telefono = ?
            WHERE id_persona = ?"; 
    $query = $conexion->prepare($sql);
    $query->bind_param('ssssi' , $datos['firstname'], 
                                    $datos['lastname'], 
                                    $datos['name'],
                                    $datos['number'],
                                    $idPersona);
    $respuesta = $query->execute();
    $query->close();
    return $respuesta;                              
  }


  public function obtenerIdPersona($idUsuario){
      $conexion = Conexion::conectar();
      $sql = "SELECT
                  persona.id_persona AS idPersona
              FROM 
                  t_usuarios AS usuarios
                      INNER JOIN
                  t_persona AS persona ON usuarios.id_persona =  persona.id_persona
                      AND usuarios.id_usuario = '$idUsuario' ";
      $respuesta = mysqli_query($conexion, $sql);
      $idPersona = mysqli_fetch_array($respuesta)['idPersona'];
      return $idPersona;
  }
  //LO QEU SE LLEBA EN ESTA SECCION DE AGREGAR
  public function agregarNuevoReporte($datos){
    $conexion = Conexion::conectar();
    $sql = "INSERT INTO t_reportes ( id_poblado,
                                        id_lugar_reporte,
                                        id_delito,
                                        id_sexo_victima,
                                        id_sexo_agresor,
                                        id_transporte_victima,
                                        id_transporte_agresor,
                                        hora,
                                        fecha,
                                        observaciones)
              VALUES (?, ?, ?, ?,?, ?, ?, ?, ?, ?)";
    $query =  $conexion->prepare($sql);
    $query->bind_param("iiiiiiisss", $datos['poblado'],
                                      $datos['lugar'],
                                      $datos['delito'],
                                      $datos['sexoV'],
                                      $datos['sexoA'],
                                      $datos['transporteV'],
                                      $datos['transporteA'],
                                      $datos['tiempo'],
                                      $datos['fecha'],
                                      $datos['observaciones']);
    $respuesta = $query->execute();
    $query->close();
    return $respuesta;
  }

  public function traerDatosGraficosBar(){
    $conexion = Conexion::conectar();
    $sql = "SELECT * FROM t_reportes";
    $respuesta = mysqli_query($conexion, $sql);
    $idPe = mysqli_fetch_array($respuesta);
    return $idPe;
  }
  
}   



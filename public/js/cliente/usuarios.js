$(document).ready(function(){
    $('#tablaUsuarios').load("usuario/tablaUsuarios.php");
})


function agregarNuevoUsuario() {
    $.ajax({
        type: "POST",
        data: $('#formularioagregarusuario').serialize(),
        url: "../procesos/usuarios/AccionCrud/agregarUsuario.php",
        success: function(respuesta){
            console.log(respuesta)
            respuesta = respuesta.trim();
            if (respuesta == 1) {
                $("#tablaUsuarios").load("usuario/tablaUsuarios.php");
                $('#formularioagregarusuario')[0].reset();
                Swal.fire("😎","Agregado con Exito","success");
            }else{
                Swal.fire("😢","Error al agregar" + respuesta,"error");
            }
    }   
    });
    return false;           
}

function obtenerDatosUsuario(idUsuario) {
    $.ajax({
        type: "POST",
        data: "idUsuario=" + idUsuario,
        url: "../procesos/usuarios/AccionCrud/obtenerDatosUsuario.php",
        success: function(respuesta){
        console.log(respuesta)
        respuesta = jQuery.parseJSON(respuesta)
        $('#idUsuario').val(respuesta['idUsuario']);
        $('#firstnameUpdate').val(respuesta['paterno']);
        $('#lastnameUpdate').val(respuesta['materno']);
        $('#nameUpdate').val(respuesta['nombrePersona']);
        $('#numberUpdate').val(respuesta['telefono']);
        $('#userUpdate').val(respuesta['nombreUsuario']);
        $('#locationUpdate').val(respuesta['ubicacion']);
        $('#rolUpdate').val(respuesta['idRol']);

    }
    });
}

function actualizarUsuario( ) {
    $.ajax({
        type: "POST",
        data: $('#formularioactualizarusuario').serialize(),
        url: "../procesos/usuarios/AccionCrud/actualizarUsuario.php",
        success: function(respuesta){
            respuesta = respueta.trim();
            if (respuesta == 1) {
                $("#tablaUsuarios").load("usuario/tablaUsuarios.php");
                $('#formularioagregarusuario')[0].reset();
                Swal.fire("😎","Agregado con Exito","success");
            }else{
                Swal.fire("😢","Error al agregar" + respuesta,"error");
            }
        }
    });

    return false
}
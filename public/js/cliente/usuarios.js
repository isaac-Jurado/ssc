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
$(document).ready(function(){
    $('#tablaReportesLoad').load("usuario/tablaReportes.php");

});


function agregarNuevoReporte(){

    $.ajax({
        type: "POST",
        data: $('#formularioagregarReporte').serialize(),
        url: "../procesos/usuarios/AccionCrud/agregarNuevoReporte.php",
        success:function(respuesta){
            respuesta = respuesta.trim();
            if (respuesta == 1) {
                $('#tablaReportesLoad').load("usuario/tablaReportes.php");
                $('#formularioagregarReporte')[0].reset();
                Swal.fire(":D","Agregado con exito!","success");
            }else {
                Swal.fire(":(", "Error al agregar! " + respuesta, "error");
            }
        }
    });


    return false;
}



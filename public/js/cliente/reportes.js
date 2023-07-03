$(document).ready(function(){
    $('#tablaReportesLoad').load("reportes/tablaReportes.php");
    crearSelectAlgo();
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

function agregarNuevoDelito() {
    $.ajax({
        type: "POST",
        data: $('#frmAgregarDelito').serialize(),
        url: "../procesos/usuarios/AccionCrud/agregarNuevoDelito.php",
        success:function(respuesta){
            respuesta = respuesta.trim();
            if (respuesta == 1) {
                //$('#tablaReportesLoad').load("usuario/tablaReportes.php");
                crearSelectAlgo();
                $('#frmAgregarDelito')[0].reset();
                Swal.fire(":D","Agregado con exito!","success");
            }else {
                Swal.fire(":(", "Error al agregar! " + respuesta, "error");
            }
        }
    });
    return false;
}
//

function crearSelectAlgo(){

    $.ajax({
        url: "../procesos/usuarios/AccionCrud/select.php",
        success:function(respuesta){
             //ESTE SELECT ES QUE APARECE Y ES EL QUE NOS MOSTRARA LA PARTE DE LOS DELITOS 
            $('#listadoDelito').html(respuesta);
        }
    }); 
}


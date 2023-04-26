$(document).ready(function(){
    $('#tablaReportesLoad').load("usuario/tablaReporte.php");

});


function agregarNuevoReporte(){

$.ajax({
    type: "POST",
    data: $('#frmAgregarReporte').serialize(),
    url: "../procesos/usuarios/AccionCrud/agregarNuevoReporte.php",
    success:function(){
        respuesta = respuesta.trim();
        if (respuesta == 1) {
            $('#tablaReportesLoad').load("usuario/tablaReporte.php");
            $('#frmAgregarReporte')[0].reset();
            swal.fire(":D","Agregado con exito!","success");
        }else {
            swal.fire(":(", "Error al agregar! " + respuesta, "error");
        }
    }
    });


    return false;
}

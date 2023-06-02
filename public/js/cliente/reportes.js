$(document).ready(function(){
    $('#tablaReportesLoad').load("usuario/tablaReportes.php");
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

function crearSelectAlgo(){

    $.ajax({
        type: "POST",
        data: $('#formularioagregarReporte').serialize(),
        url: "../procesos/usuarios/AccionCrud/select.php",
        success:function(respuesta){
            console.log(respuesta)
            respuesta = respuesta.trim();
            
        }
    });
    //ESTE SELECT ES QUE APARECE Y ES EL QUE NOS MOSTRARA LA PARTE DE LOS DELITOS 

    let cadenaObtenido = '<select name="delito" id="delito"></select>';
    $('#selectalgo').html(cadenaObtenido);

}


function agregarNuevoDelito() {
    $.ajax({
        type: "POST",
        data: $('#frmAgregarDelito').serialize(),
        url: "../procesos/usuarios/AccionCrud/agregarNuevoDelito.php",
        success:function(respuesta){
            respuesta = respuesta.trim();
            if (respuesta == 1) {
                //$('#tablaReportesLoad').load("usuario/tablaReportes.php");
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
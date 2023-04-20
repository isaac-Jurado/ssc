function loginUsuario() {
    $.ajax({
        type:"POST",
        data:$('#login').serialize(),
        url:"procesos/usuarios/login/loginUsuario.php",
        success:function(respuesta){
            // esta linea quita los espacios
            respuesta = respuesta.trim();
            if (respuesta == 1){
                //nos redirige a el home 
                window.location.href = "vistas/inicio.php";
            }else{
                Swal.fire(":(","Error al entrar!" + respuesta, "error");
            }
      }
    })
    return false;
  }
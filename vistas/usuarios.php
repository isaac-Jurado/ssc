<!-- incluimos el archivo header que contiene el navar -->
<?php include "header.php";
    
    //con el if se hace la validacion de usuarios si se cumple con 
    //la validacion y si no se cumple te manda al index(login)
    if (isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] == 2) {
?>
    <!-- Page Content -->
    <div class="container">
        <h1 class="mt-4">ususarios </h1>
        <p>
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuarios">Agregar</button>
        </p>
        <hr>
        <div id="tablaUsuarios"></div>

    </div>

<!-- incluimos el archivo los scripst y el cirre de el html -->
<?php
    include "usuario/modalAgregar.php";
    include "footer.php"; 
?>    
<script src="../public/js/cliente/usuarios.js"></script>

<?php
    }else{
        header("location:../index.html");
    }
?>
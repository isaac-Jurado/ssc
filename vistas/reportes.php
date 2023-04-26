<!-- incluimos el archivo header que contiene el navar -->
<?php
include "header.php";
if (isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] == 1 || $_SESSION['usuario']['rol'] == 2) {
?>

    <!-- Page Content -->
    <div class="container">
        <h1 class="mt-4">Administrar reportes</h1>
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarReportes">
            Agregar reporte
        </button>
        <hr>
        <div id="tablaReportesLoad">
        </div>
    </div>

        <!-- incluimos el archivo los scripst y el cirre de el html -->
    <?php
    include "usuario/modalAgregarReporte.php";
    include "footer.php";
    ?>
    
    <script src="../public/js/cliente/usuarios.js"></script>
    <script src="../public/js/cliente/reportes.js"></script>
    <?php
    } else {
        header("location:../index.html");
    }
    ?>
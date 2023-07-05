<!-- incluimos el archivo header que contiene el navar -->
<?php
include "header.php";
if (isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] == 1 ) {
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
    include "reportes/modalAgregarDelito.php";
    include "reportes/modalAgregarReporte.php";
    include "footer.php";
    ?>
    
    <script src="../public/js/cliente/reportes.js"></script>

    <?php } else if (isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] == 2){ ?>
        <div class="container">
        <h1 class="mt-4">Administrar reportes</h1>
        <button class="btn btn-primary but" data-toggle="modal" data-target="#modalAgregarReportes">
            <span>Agregar reporte</span> 
        </button>
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarDelito">
            Agregar Delito
        </button>
        <hr>
        <div id="tablaReportesLoad">
        </div>
    </div>

        <!-- incluimos el archivo los scripst y el cirre de el html -->
    <?php
    include "reportes/modalAgregarDelito.php";
    include "reportes/modalAgregarReporte.php";
    include "footer.php";
    ?>
    
    <script src="../public/js/cliente/reportes.js"></script>


    <?php }else {
        header("location:../index.html");
    }
    ?>
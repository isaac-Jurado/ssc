<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../public/datatable/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../public/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../public/datatable/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../public/datatable/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../public/css/grafica.css">

    
    <title>semaforoDeSeguridad</title>  
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="#">
        <img src="../public/img/Ssccdmx.png" alt="..." height="36">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="inicio.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="reportes.php">reportes</a>
            </li>
            <!-- //!apartir de aca solo iran las vistas del usuario comun -->
            <?php if ($_SESSION['usuario']['rol']==1) { ?>
            <li class="nav-item">
                <a class="nav-link" href="pru.php">prueva</a>
            </li>
            <?php } elseif ($_SESSION['usuario']['rol']==2) {
            ?>
            <!-- //!apartir de aca solo iran las vistas unicas del administrador -->
            <li class="nav-item">
                <a class="nav-link" href="usuarios.php">usuarios</a>
            </li>
            <?php
                }
            ?>
            <li class="nav-item">
            <a class="nav-link" href="../procesos/usuarios/login/salir.php">Salir</a>
            </li>   
             
            </ul>
        </div>
    </div>
</nav>
<?php 
    session_start();
    // destruye o cierra la sesion
    session_destroy();

    header("location:../../../index.html");
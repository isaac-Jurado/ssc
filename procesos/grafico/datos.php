<?php 
include "../../clases/Grafica.php";


    $class = new Grafica;
    $run = $class->build_report();
    exit(json_encode($run));


?>
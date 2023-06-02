<?php 
include "../../clases/Grafica.php";

if($_POST['year']){
    $class = new Grafica;
    $run = $class->build_report($_POST['year']);
    exit(json_encode($run));
}

?>
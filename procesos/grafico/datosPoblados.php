<?php 
include "../../clases/informes.php";

if($_POST['year']){
    
    $class = new graficas;
    $run = $class->build_report($_POST['year']);
    exit(json_encode($run));
}

?>
<?php 
include "../../clases/informes.php";

if($_POST['year']){
    
    $class = new graficas;
    $run = $class->report_buil($_POST['year']);
    exit(json_encode($run));
}

?>
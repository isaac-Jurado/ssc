<?php 
include "../../clases/informes.php";

// if($_POST['year']){
//     // $class = new graficas;
//     // $run = $class->report_buil($_POST['year']);
//     // exit(json_encode($run));
// }

$class = new graficas;
exit(json_encode($class->report_buil($_POST['year'], $_POST['delito'])));

?>
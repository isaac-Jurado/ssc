

<?php 
 include "Conexion.php";

    class Grafica extends Conexion {
        public function build_report($year){
	    	$total = array();
	    	for($i=0; $i<12; $i++){
	    		$month = $i+1;
				$consulta = "SELECT COUNT(id_delito) AS total FROM t_reportes WHERE MONTH(fecha) = '$month' AND YEAR(fecha) = '$year' AND id_delito=7 LIMIT 1";
	    		$sql = $this->conectar()->query($consulta);	
	    		$total[$i] = 0;
	    		foreach ($sql as $key){ $total[$i] = ($key['total'] == null)? 0 : $key['total']; }
	    	}			 
			return $total;
	    }
    }


?>
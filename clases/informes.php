<?php 
	include "Conexion.php";

    class graficas extends Conexion {
        public function reporte_tecomitl($year){
	    	$total = array();
	    	for($i=0; $i<12; $i++){
	    		$month = $i+1;
				$consulta = "SELECT COUNT(id_delito) AS total FROM t_reportes WHERE MONTH(fecha) = '$month' AND YEAR(fecha) = '$year' AND id_delito=7 AND id_poblado = 2 LIMIT 1";
	    		$sql = $this->conectar()->query($consulta);	
	    		$total[$i] = 0;
	    		foreach ($sql as $key){ $total[$i] = ($key['total'] == null)? 0 : $key['total']; }
	    	}			 
			return $total;
	    }
        public function reporte_milpa($year){
	    	$total = array();
	    	for($i=0; $i<12; $i++){
	    		$month = $i+1;
				$consulta = "SELECT COUNT(id_delito) AS total FROM t_reportes WHERE MONTH(fecha) = '$month' AND YEAR(fecha) = '$year' AND id_delito=7  AND id_poblado = 12 LIMIT 1";
	    		$sql = $this->conectar()->query($consulta);	
	    		$total[$i] = 0;
	    		foreach ($sql as $key){ $total[$i] = ($key['total'] == null)? 0 : $key['total']; }
	    	}			 
			return $total;
	    }
        public function reporte_francisco($year){
	    	$total = array();
	    	for($i=0; $i<12; $i++){
	    		$month = $i+1;
				$consulta = "SELECT COUNT(id_delito) AS total FROM t_reportes WHERE MONTH(fecha) = '$month' AND YEAR(fecha) = '$year' AND id_delito=7 AND id_poblado = 4 LIMIT 1";
	    		$sql = $this->conectar()->query($consulta);	
	    		$total[$i] = 0;
	    		foreach ($sql as $key){ $total[$i] = ($key['total'] == null)? 0 : $key['total']; }
	    	}			 
			return $total;
	    }
        public function report_buil($year){
	    	$tecomitlsql = $this->reporte_tecomitl($year);
            $milpasql = $this->reporte_milpa($year);
            $franciscosql = $this->reporte_francisco($year);
		    return ["tecomitlsql" => $tecomitlsql, "milpasql" => $milpasql,"franciscosql"=>$franciscosql];
	    }			 
			
	    
    }


?>
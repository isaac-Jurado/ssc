<?php 
	include "Conexion.php";

    class graficas extends Conexion {
        public function reporte_tecomitl($year, $delito){
	    	$total = array();
	    	for($i=0; $i<12; $i++){
	    		$month = $i+1;
				$consulta = "SELECT COUNT(id_delito) AS total FROM t_reportes WHERE MONTH(fecha) = $month AND YEAR(fecha) = $year AND id_delito = $delito AND id_poblado = 2 LIMIT 1";
	    	 	$sql = $this->conectar()->query($consulta);	
	    	 	$total[$i] = $sql->fetch_array()['total'];
			}		 
			return $total;
	    }
        public function reporte_milpa($year, $delito){
	    	$total = array();
	    	for($i=0; $i<12; $i++){
	    		$month = $i+1;
				$consulta = "SELECT COUNT(id_delito) AS total FROM t_reportes WHERE MONTH(fecha) = $month AND YEAR(fecha) = $year AND id_delito = $delito AND id_poblado = 12 LIMIT 1";
	    	 	$sql = $this->conectar()->query($consulta);	
	    	 	$total[$i] = $sql->fetch_array()['total'];
			}			 
			return $total;
	    }
        public function reporte_francisco($year, $delito){
	    	$total = array();
	    	for($i=0; $i<12; $i++){
	    		$month = $i+1;
				$consulta = "SELECT COUNT(id_delito) AS total FROM t_reportes WHERE MONTH(fecha) = $month AND YEAR(fecha) = $year AND id_delito = $delito AND id_poblado = 4 LIMIT 1";
	    	 	$sql = $this->conectar()->query($consulta);	
	    	 	$total[$i] = $sql->fetch_array()['total'];
			}		 
			return $total;
	    }
        public function reporte_ohtenco($year, $delito){
	    	$total = array();
	    	for($i=0; $i<12; $i++){
	    		$month = $i+1;
				$consulta = "SELECT COUNT(id_delito) AS total FROM t_reportes WHERE MONTH(fecha) = $month AND YEAR(fecha) = $year AND id_delito = $delito AND id_poblado = 1 LIMIT 1";
	    	 	$sql = $this->conectar()->query($consulta);	
	    	 	$total[$i] = $sql->fetch_array()['total'];
			}			 
			return $total;
	    }
        public function reporte_tepenahuac($year, $delito){
	    	$total = array();
	    	for($i=0; $i<12; $i++){
	    		$month = $i+1;
				$consulta = "SELECT COUNT(id_delito) AS total FROM t_reportes WHERE MONTH(fecha) = $month AND YEAR(fecha) = $year AND id_delito = $delito AND id_poblado = 6 LIMIT 1";
	    	 	$sql = $this->conectar()->query($consulta);	
	    	 	$total[$i] = $sql->fetch_array()['total'];
			}		 
			return $total;
	    }
        public function reporte_tlacotenco($year, $delito){
	    	$total = array();
	    	for($i=0; $i<12; $i++){
	    		$month = $i+1;
				$consulta = "SELECT COUNT(id_delito) AS total FROM t_reportes WHERE MONTH(fecha) = $month AND YEAR(fecha) = $year AND id_delito = $delito AND id_poblado = 11 LIMIT 1";
	    	 	$sql = $this->conectar()->query($consulta);	
	    	 	$total[$i] = $sql->fetch_array()['total'];
			}			 
			return $total;
	    }		 
		public function reporte_salvador($year, $delito){
	    	$total = array();
	    	for($i=0; $i<12; $i++){
	    		$month = $i+1;
				$consulta = "SELECT COUNT(id_delito) AS total FROM t_reportes WHERE MONTH(fecha) = $month AND YEAR(fecha) = $year AND id_delito = $delito AND id_poblado = 10 LIMIT 1";
	    	 	$sql = $this->conectar()->query($consulta);	
	    	 	$total[$i] = $sql->fetch_array()['total'];
			}			 
			return $total;
	    }
		public function reporte_bartolome($year, $delito){
	    	$total = array();
	    	for($i=0; $i<12; $i++){
	    		$month = $i+1;
				$consulta = "SELECT COUNT(id_delito) AS total FROM t_reportes WHERE MONTH(fecha) = $month AND YEAR(fecha) = $year AND id_delito = $delito AND id_poblado = 3 LIMIT 1";
	    	 	$sql = $this->conectar()->query($consulta);	
	    	 	$total[$i] = $sql->fetch_array()['total'];
			}			 
			return $total;
	    }	
		public function reporte_jeronimo($year, $delito){
	    	$total = array();
	    	for($i=0; $i<12; $i++){
	    		$month = $i+1;
				$consulta = "SELECT COUNT(id_delito) AS total FROM t_reportes WHERE MONTH(fecha) = $month AND YEAR(fecha) = $year AND id_delito = $delito AND id_poblado = 5 LIMIT 1";
	    	 	$sql = $this->conectar()->query($consulta);	
	    	 	$total[$i] = $sql->fetch_array()['total'];
			}			 
			return $total;
	    }
		public function reporte_lorenzo($year, $delito){
	    	$total = array();
	    	for($i=0; $i<12; $i++){
	    		$month = $i+1;
				$consulta = "SELECT COUNT(id_delito) AS total FROM t_reportes WHERE MONTH(fecha) = $month AND YEAR(fecha) = $year AND id_delito = $delito AND id_poblado = 7 LIMIT 1";
	    	 	$sql = $this->conectar()->query($consulta);	
	    	 	$total[$i] = $sql->fetch_array()['total'];
			}			 
			return $total;
	    }
		public function reporte_pablo($year, $delito){
	    	$total = array();
	    	for($i=0; $i<12; $i++){
	    		$month = $i+1;
				$consulta = "SELECT COUNT(id_delito) AS total FROM t_reportes WHERE MONTH(fecha) = $month AND YEAR(fecha) = $year AND id_delito = $delito AND id_poblado = 8 LIMIT 1";
	    	 	$sql = $this->conectar()->query($consulta);	
	    	 	$total[$i] = $sql->fetch_array()['total'];
			}			 
			return $total;
	    }
		public function reporte_pedro($year, $delito){
	    	$total = array();
	    	for($i=0; $i<12; $i++){
	    		$month = $i+1;
				$consulta = "SELECT COUNT(id_delito) AS total FROM t_reportes WHERE MONTH(fecha) = $month AND YEAR(fecha) = $year AND id_delito = $delito AND id_poblado = 9 LIMIT 1";
	    	 	$sql = $this->conectar()->query($consulta);	
	    	 	$total[$i] = $sql->fetch_array()['total'];
			}			 
			return $total;
	    }	 
		public function report_buil($year, $delito){
			$tecomitlsql = $this->reporte_tecomitl($year, $delito);
			$milpasql = $this->reporte_milpa($year, $delito);
			$franciscosql = $this->reporte_francisco($year, $delito);
			$ohtencosql = $this->reporte_ohtenco($year, $delito);
			$tepenahuacsql = $this->reporte_tepenahuac($year, $delito);
			$tlacotencosql = $this->reporte_tlacotenco($year, $delito);
			$salvadorsql = $this->reporte_salvador($year, $delito);
			$bartolomesql = $this->reporte_bartolome($year, $delito);
			$jeronimosql = $this->reporte_jeronimo($year, $delito);
			$lorenzosql = $this->reporte_lorenzo($year, $delito);
			$pablosql = $this->reporte_pablo($year, $delito);
			$pedrosql = $this->reporte_pedro($year, $delito);
			return ["tecomitlsql" => $tecomitlsql, "milpasql" => $milpasql,"franciscosql"=>$franciscosql,
			        "ohtencosql"=>$ohtencosql,"tepenahuacsql"=>$tepenahuacsql,"tlacotencosql"=>$tlacotencosql,
					"salvadorsql"=>$salvadorsql, "bartolomesql"=>$bartolomesql, "jeronimosql"=>$jeronimosql,
					"lorenzosql"=>$lorenzosql, "pablosql"=>$pablosql,"pedrosql"=>$pedrosql];
		}	
	    
    }


?>
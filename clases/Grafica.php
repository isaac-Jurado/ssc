

<?php 
 include "Conexion.php";

 
    class Grafica extends Conexion {
		
        public function build_report_delitos1(){
	    	$total = array();
			$delito =  rand(1,7);
			$año = date('Y');
	    	for($i=0; $i<12; $i++){
				$month = $i+1;
				$consulta = "SELECT COUNT(id_delito) AS total FROM t_reportes WHERE MONTH(fecha) = '$month' AND YEAR(fecha) = $año AND id_delito=$delito LIMIT 1";
	    		$sql = $this->conectar()->query($consulta);	
	    		$total[$i] = 0;
	    		foreach ($sql as $key){ $total[$i] = ($key['total'] == null)? 0 : $key['total']; }
	    	}			 
			return $total;
	    }
		public function build_report_delitos2(){
	    	$total = array();
			$delito =  rand(8,12);
			$año = date('Y');
	    	for($i=0; $i<12; $i++){
				$month = $i+1;
				$consulta = "SELECT COUNT(id_delito) AS total FROM t_reportes WHERE MONTH(fecha) = '$month' AND YEAR(fecha) = $año AND id_delito=$delito LIMIT 1";
	    		$sql = $this->conectar()->query($consulta);	
	    		$total[$i] = 0;
	    		foreach ($sql as $key){ $total[$i] = ($key['total'] == null)? 0 : $key['total']; }
	    	}			 
			return $total;
	    }

		public function build_report_sexo_agresor(){
		$año = date('Y');
		$consulta_femenino = "SELECT COUNT(id_sexo_agresor) AS total FROM t_reportes WHERE id_sexo_agresor = 1 and year(fecha)=$año";
		$consulta_masculino = "SELECT COUNT(id_sexo_agresor) AS total FROM t_reportes WHERE id_sexo_agresor = 2 and year(fecha)=$año";

		$sql1 = $this->conectar()->query($consulta_femenino);
		$sql2 = $this->conectar()->query($consulta_masculino);
		
		$res1 = $sql1->fetch_assoc();
		$res2 = $sql2->fetch_assoc();

		return array($res1, $res2);
		}

		
		public function build_report_sexo_victima()	{
		$año = date('Y');
		$consulta_femenino = "SELECT COUNT(id_sexo_victima) AS total FROM t_reportes WHERE id_sexo_victima = 1 and year(fecha)=$año";
		$consulta_masculino = "SELECT COUNT(id_sexo_victima) AS total FROM t_reportes WHERE id_sexo_victima = 2 and year(fecha)=$año";

		$sql1 = $this->conectar()->query($consulta_femenino);
		$sql2 = $this->conectar()->query($consulta_masculino);
		
		$res1 = $sql1->fetch_assoc();
		$res2 = $sql2->fetch_assoc();

		return array($res1, $res2);}


		public function build_report(){
		$delitos1 = $this->build_report_delitos1();
		$delitos2 = $this->build_report_delitos2();
		$sexo_victima = $this->build_report_sexo_victima();
		$sexo_agresor = $this->build_report_sexo_agresor();
		return ["delitos1" => $delitos1, "delitos2" => $delitos2, "sexo_victima" => $sexo_victima, "sexo_agresor" => $sexo_agresor];
		}

    }
?>
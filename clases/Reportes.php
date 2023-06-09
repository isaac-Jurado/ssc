<?php 
    include "Conexion.php";

    class Reportes extends Conexion {

        public function crearSelectDelitos() {
            $conexion = Conexion::conectar();
            $sql = "SELECT nombre AS nombreDelito, 
                            id_delito AS idDelito
                    FROM t_cat_delitos";
            $respuesta = mysqli_query($conexion, $sql);
            $select = '<select name="delito" id="delito" class="form-control">';

            while ($ver = mysqli_fetch_array($respuesta)) {
                $select .= '<option value="'. $ver['idDelito'] .'">' . $ver['nombreDelito'] . '</option>';
            }

            return $select . '</select>';
        }


    }


?>
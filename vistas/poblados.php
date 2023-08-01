<!-- incluimos el archivo header que contiene el navar -->
<?php include "header.php";
    include "../clases/Conexion.php";
    $con = new Conexion();
    $conexion = $con->conectar();
    $sql = "SELECT * FROM t_cat_delitos";
    $respuesta = mysqli_query($conexion, $sql);
    //con el if se hace la validacion de usuarios si se cumple con 
    //la validacion y si no se cumple te manda al index(login)
    if (isset($_SESSION['usuario']) &&
    $_SESSION['usuario']['rol'] == 1 || $_SESSION['usuario']['rol'] == 2) {

?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="caja">
                        <select id="year" onChange="mostraResultado();">
                            <?php
                                $añoActual = date('Y');
                                for($i=2020;$i<=$añoActual;$i++){
                                    if($i == $añoActual){
                                        echo '<option value="'.$i.'" selected>'.$i.'</option>';
                                    }else{
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="caja">
                        <select id="delito" onChange="mostraResultado();">
                            <?php
                                while($mostrar = mysqli_fetch_array($respuesta)) {
                            ?>
                            <option value="<?php echo $mostrar['id_delito']?>"><?php echo $mostrar['nombre']?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
<div class="container-fluid mt-3">
    <div class="row">
        <!-- //! tecomitl -->
        <div class="col-xl-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Tecomitl
                </div>
                <div class="card-body" style="width: 95%; height:100%;"><canvas id="tecomitl" width="100%" height="40" ></canvas></div>
            </div>
        </div>
        <!-- //! milpa alta  -->
        <div class="col-xl-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Villa Milpa Alta
                </div>
                <div class="card-body" style="width: 95%; height:100%;"><canvas id="milpa" width="100%" height="40" ></canvas></div>
            </div>
        </div>
        <!-- //!san fracisco -->
        <div class="col-xl-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    San Francisco
                </div>
                <div class="card-body" style="width: 95%; height:100%;"><canvas id="francisco" width="100%" height="40" ></canvas></div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- //!san agustin otenco -->
        <div class="col-xl-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    San Agustin Ohtenco
                </div>
                <div class="card-body" style="width: 95%; height:100%;"><canvas id="agustin" width="100%" height="40" ></canvas></div>
            </div>
        </div>
        <!-- //! san juan tepenahuac  -->
        <div class="col-xl-4">
            <div class="card mb-4" ">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    San Juan Tepenahuac
                </div>
                <div class="card-body" style="width: 95%; height:100%;"><canvas id="tepenahuac" width="100%" height="40" ></canvas></div>
            </div>
        </div>
        <!-- //!santa ana -->
        <div class="col-xl-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Santa Ana Tlacotenco
                </div>
                <div class="card-body" style="width: 95%; height:100%;"><canvas id="tlacotenco" width="100%" height="40" ></canvas></div>
            </div>
        </div>
        <!-- //!san bartolome -->
        <div class="col-xl-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    San Bartolome Xicomulco
                </div>
                <div class="card-body" style="width: 95%; height:100%;"><canvas id="bartolome" width="100%" height="40" ></canvas></div>
            </div>
        </div>
        <!-- //!san jeronimo -->
        <div class="col-xl-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    San Jeronimo
                </div>
                <div class="card-body" style="width: 95%; height:100%;"><canvas id="jeronimo" width="100%" height="40" ></canvas></div>
            </div>
        </div>
        <!-- //!san Lorenzo -->
        <div class="col-xl-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    San Lorenzo Tlacoyucan
                </div>
                <div class="card-body" style="width: 95%; height:100%;"><canvas id="lorenzo" width="100%" height="40" ></canvas></div>
            </div>
        </div>
        <!-- //!san pablo  -->
        <div class="col-xl-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    San Pablo Oztotepec
                </div>
                <div class="card-body" style="width: 95%; height:100%;"><canvas id="pablo" width="100%" height="40" ></canvas></div>
            </div>
        </div>
        <!-- //!san pedro -->
        <div class="col-xl-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    San Pedro Actopan
                </div>
                <div class="card-body" style="width: 95%; height:100%;"><canvas id="pedro" width="100%" height="40" ></canvas></div>
            </div>
        </div>
        <!-- //!san salvador -->
        <div class="col-xl-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    San Salvador Cuahutenco
                </div>
                <div class="card-body" style="width: 95%; height:100%;"><canvas id="salvador" width="100%" height="40" ></canvas></div>
            </div>
        </div>
    </div>
</div>


<?php include "footer.php"; ?>

<script src="../public/js/cliente/delitos.js"></script>

<?php
    }else{
        header("location:../index.html");
    }
?>
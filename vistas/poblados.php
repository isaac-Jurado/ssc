<!-- incluimos el archivo header que contiene el navar -->
<?php include "header.php";
    
    //con el if se hace la validacion de usuarios si se cumple con 
    //la validacion y si no se cumple te manda al index(login)
    if (isset($_SESSION['usuario']) &&
    $_SESSION['usuario']['rol'] == 1 || $_SESSION['usuario']['rol'] == 2) {

?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="caja">
                        <select onChange="mostraResultado(this.value);">
                            <?php
                                $añoActual = date('Y');
                                for($i=1900;$i<=$añoActual;$i++){
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
</div>


<?php include "footer.php"; ?>

<script src="../public/js/cliente/delitos.js"></script>

<?php
    }else{
        header("location:../index.html");
    }
?>
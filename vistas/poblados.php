<?php include "header.php";
    
    //con el if se hace la validacion de usuarios si se cumple con 
    //la validacion y si no se cumple te manda al index(login)
    if (isset($_SESSION['usuario']) && $_SESSION['usuario']['rol'] == 1 || $_SESSION['usuario']['rol'] == 2) {

?>

<div class="container">
            <div class="row">
                <div class="col">
                    <div class="caja">
                        <select onChange="mostrarResultados(this.value);">
                            <?php
                                for($i=1900;$i<2025;$i++){
                                    if($i == 2023){
                                        echo '<option value="'.$i.'" selected>'.$i.'</option>';
                                    }else{
                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="resultados"><canvas id="tecomitl"></canvas></div>
                </div>
            </div>
        </div>
<div class="container mt-3">
    <!-- //! para graficas de los 12 poblados -->
    <div class="row mt-3">
        <!-- milpa alta -->
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Villa Milpa Alta
                </div>
                <div class="card-body " style="width: 95%; height:100%;"><canvas id="MilpaAlta" width="100%" height="40" ></canvas></div>
            </div>
        </div>
        <!-- tecomitl -->
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Tecomitl
                </div>
                <div class="card-body" style="width: 95%; height:100%;"><canvas id="tecomit" width="100%" height="40" ></canvas></div>
            </div>
        </div>  
    </div>
</div>

<? 
    include "footer.php"; 
?>
    <script src="../public/js/cliente/delito.js"></script>
<?php 
    }else{
        header("location:../index.html");
    }
?>
<!-- incluimos el archivo header que contiene el navar -->
<?php include "header.php";
    
    //con el if se hace la validacion de usuarios si se cumple con 
    //la validacion y si no se cumple te manda al index(login)
    if (isset($_SESSION['usuario']) &&
    $_SESSION['usuario']['rol'] == 1 || $_SESSION['usuario']['rol'] == 2) {

?>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
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
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="resultados"><canvas id="grafico"></canvas></div>
                </div>
            </div>
        </div>
            



<?php include "footer.php"; ?>

<script src="../public/js/cliente/grafico.js"></script>

<?php
    }else{
        header("location:../index.html");
    }
?>
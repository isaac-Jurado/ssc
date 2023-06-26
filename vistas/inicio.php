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
                <h1>
                    Crimenes
                </h1>
            </div>
        </div>
    </div> 
</div>


<div class="container mt-2">
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Robos</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <button class="btn btn-outline-warning" data-toggle="modal" data-target="#modalRobosinfo">
                            View Details
                        </button>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
            </div>

        </div>
        <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">feminisidio</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Robo a transeunte</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Abuso Sexual</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
			<div class="col-xl-6">
				<div class="card mb-4">
					<div class="card-header">
						<i class="fas fa-chart-area me-1"></i>
						Area Chart Example
					</div>
					<div class="card-body" style="width: 95%; height:100%;"><canvas id="grafico1" width="100%" height="40" ></canvas></div>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="card mb-4">
					<div class="card-header">
						<i class="fas fa-chart-bar me-1"></i>
						Robo a Transeunte
					</div>
					<div class="card-body" style="width: 95%; height:100%;"><canvas id="grafico2" width="100%" height="40" ></canvas></div>
				</div>
			</div>
		</div>

        <div class="row mt-3">
            <div class="col-6 d-flex justify-content-center align-items-center">
                <div class="">

                    <h3>Relacion de agresores por sexo</h3>
                    <div>
                        <canvas id="agresor" />
                    </div>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center">
                <div class="">

                    <h3>Relacion de victimas por sexo</h3>
                    <div>
                        <canvas id="victima" />
                    </div>
                </div>
            </div>
        </div>
</div>

         




<?php 
    include "dashboard/robos.php";
    include "footer.php"; 
?>

<script src="../public/js/cliente/grafico.js"></script>

<?php
    }else{
        header("location:../index.html");
    }
?>
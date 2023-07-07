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
        <!-- <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Robos a transeunte</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            View Details
                        </button>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
            </div>

        </div> -->
        <div class="col">
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                <span> Robo a Transeunte</span>
            </a>
            <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card card-body">
                <div id="tablacollapse"></div>
            </div>
            </div>
        </div>
        <div class="col">
            <a class="btn btn-danger" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                <span>Abuso Sexual </span>
            </a>
            <div class="collapse multi-collapse" id="multiCollapseExample2">
            <div class="card card-body">
                <div id="tablacollapse2"></div>
            </div>
            </div>
        </div>
        <div class="col">
            <a class="btn btn-success" data-bs-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                Violacion
            </a>
            <div class="collapse multi-collapse" id="multiCollapseExample3">
            <div class="card card-body">
                <div id="tablacollapse3"></div>
            </div>
            </div>
        </div>
        <div class="col">
            <a class="btn btn-warning" data-bs-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Violencia Genero</a>
            <div class="collapse multi-collapse" id="multiCollapseExample4">
            <div class="card card-body">
                <div id="tablacollapse4"></div>
            </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
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
					<div class="card-body" style="width: 95%; height:100%;"><canvas id="grafico2" width="100%" height="50" ></canvas></div>
				</div>
			</div>
		</div>

        <div class="row mt-3">
            <div class="col-6 d-flex justify-content-center align-items-center">
                <div class="">

                    <h3>Relacion de agresores por sexo</h3>
                    <div>
                        <canvas id="agresor" >
                    </div>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center">
                <div class="">

                    <h3>Relacion de victimas por sexo</h3>
                    <div>
                        <canvas id="victima" >
                    </div>
                </div>
            </div>
        </div>
</div>

         




<?php 
    include "footer.php"; 
?>
<script src="../public/js/cliente/collapse.js"></script>
<script src="../public/js/cliente/grafico.js"></script>

<?php
    }else{
        header("location:../index.html");
    }
?>
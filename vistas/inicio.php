<!-- incluimos el archivo header que contiene el navar -->
<?php include "header.php";
    
    //con el if se hace la validacion de usuarios si se cumple con 
    //la validacion y si no se cumple te manda al index(login)
    if (isset($_SESSION['usuario']) &&
    $_SESSION['usuario']['rol'] == 1 || $_SESSION['usuario']['rol'] == 2) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">  
                <canvas id="myChart" width="60px" height="50px"></canvas>
            </div>
            <div class="col-sm-6">
                <div class="caja">
                    <select onChange="mostrarResultados(this.value);">
                        <?php
                            for($i=2000;$i<2020;$i++){
                                if($i == 2015){
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


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart');

        new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
            datasets: [{
            label: '# of Votes',
            data: [2,3,4,9],
            borderWidth: 1
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }
        });
</script>
</body>
</html>

<!-- incluimos el archivo los scripst y el cirre de el html -->
<?php include "footer.php"; 
    }else{
        header("location:../index.html");
    }
?>
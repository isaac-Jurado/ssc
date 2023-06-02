mostrarResultados(2023);

function mostrarResultados(year){
    $('.resultados').html('<canvas id="grafico"></canvas>');
    $.ajax({
        type: 'POST',
        url: '../procesos/grafico/datos.php',
        data: 'year='+year,
        dataType: 'JSON',
        success:function(response){
            console.log(response);
            var Datos = {
                    labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    datasets : [
                        {
                            fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                            strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                            highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                            highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                            data : response
                        }
                    ]
                }
            var contexto = document.getElementById('grafico').getContext('2d');
            window.Barra = new Chart(contexto).Radar(Datos, { responsive : true });
            Barra.clear();
        }
    });
    return false;
}
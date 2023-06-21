dashboard1();

function dashboard1(){
    $('.resultados').html('<canvas id="grafico1"></canvas>');
    $.ajax({
        type: 'POST',
        url: '../procesos/grafico/datos.php',
        dataType: 'JSON',
        success:function(response){
            console.log(response);
            var Datos1 = {
                    labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    datasets : [
                        {
                            fillColor : 'rgba(244,83,46,0.6)', //COLOR DE LAS BARRAS
                            strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                            highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                            highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                            data : response.delitos1,
                        },
                    ],
                };

                var Datos2 = {
                    labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    datasets : [
                        {
                            fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                            strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                            highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                            highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                            data : response.delitos2,
                        },
                    ],
                };

            var contexto = document.getElementById('grafico1').getContext('2d');
            window.Barra = new Chart(contexto).Bar(Datos1, { responsive : true });
            Barra.clear();

            var contexto = document.getElementById('grafico2').getContext('2d');
            window.Barra = new Chart(contexto).Line(Datos2, { responsive : true });
            Barra.clear();
        },
    });
}



mostrarResultado();

function mostrarResultado(){
    $('.resultados').html('<canvas id="grafico2"></canvas>');
    $.ajax({
        type: 'POST',
        url: '../procesos/grafico/datos.php',
        dataType: 'JSON',
        success:function(response){
            console.log(response);
            
            var contexto = document.getElementById('grafico2').getContext('2d');
            window.Barra = new Chart(contexto).Line(Datos, { responsive : true });
            Barra.clear();



        }

        
    });
    return false;
}
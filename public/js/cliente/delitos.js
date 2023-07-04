var today = new Date();
var año = today.getFullYear();


mostraResultado(año);

function mostraResultado(year){
    $('.resultados').html('<canvas id="tecomitl"></canvas>');
    $.ajax({
        type: 'POST',
        url: '../procesos/grafico/datosPoblados.php',
        data: 'year='+year,
        dataType: 'JSON',
        success:function(response){
            console.log(year)
            console.log(response);
            var tecomitl = {
                    labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    datasets : [
                        {
                            fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                            strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                            highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                            highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                            data : response.tecomitlsql
                        }
                    ]
            }
            var milpaAlta = {
                labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                datasets : [
                    {
                        fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                        strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                        highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                        highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                        data : response.milpasql
                    }
                ] 
            }
            var SanFrancisco = {
                labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                datasets : [
                    {
                        fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                        strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                        highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                        highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                        data : response.franciscosql
                    }
                ] 
            }
            var SanAgustin = {
                labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                datasets : [
                    {
                        fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                        strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                        highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                        highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                        data : response.franciscosql
                    }
                ] 
            }
            var SanJuan = {
                labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                datasets : [
                    {
                        fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                        strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                        highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                        highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                        data : response.franciscosql
                    }
                ] 
            }
            var SantaAna = {
                labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                datasets : [
                    {
                        fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                        strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                        highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                        highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                        data : response.franciscosql
                    }
                ] 
            }
            var contexto = document.getElementById('tecomitl').getContext('2d');
            window.Barra = new Chart(contexto).Bar(tecomitl, { responsive : true });
            Barra.clear();
            var contexto = document.getElementById('milpa').getContext('2d');
            window.Barra = new Chart(contexto).Line(milpaAlta, { responsive : true });
            Barra.clear();
            var contexto = document.getElementById('francisco').getContext('2d');
            window.Barra = new Chart(contexto).Line(SanFrancisco, { responsive : true });
            Barra.clear();
            var contexto = document.getElementById('agustin').getContext('2d');
            window.Barra = new Chart(contexto).Line(SanAgustin, { responsive : true });
            Barra.clear();
            var contexto = document.getElementById('tepenahuac').getContext('2d');
            window.Barra = new Chart(contexto).Line(SanJuan, { responsive : true });
            Barra.clear();
            var contexto = document.getElementById('tlacotenco').getContext('2d');
            window.Barra = new Chart(contexto).Line(SantaAna, { responsive : true });
            Barra.clear();
        }
    });
    return false;
}
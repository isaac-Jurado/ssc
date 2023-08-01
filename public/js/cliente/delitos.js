function mostraResultado() {
    $('.resultados').html('<canvas id="tecomitl"></canvas>');
    $.ajax(
        {
            type: 'POST',
            url: '../procesos/grafico/datosPoblados.php',
            data: {
                'year': $('#year').val(),
                'delito': $('#delito').val(),
            },
            dataType: 'JSON',
            success: function(response){
                var tecomitl = {
                    labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    datasets : [
                        {
                            fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                            strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                            highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                            highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                            data : response.tecomitlsql,
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
                            data : response.milpasql,
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
                            data : response.franciscosql,
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
                            data : response.ohtencosql,
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
                            data : response.tepenahuacsql,
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
                            data : response.tlacotencosql,
                        }
                    ] 
                }
                var SanBartolome = {
                    labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    datasets : [
                        {
                            fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                            strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                            highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                            highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                            data : response.bartolomesql,
                        }
                    ] 
                }
                var SanJeronimo = {
                    labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    datasets : [
                        {
                            fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                            strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                            highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                            highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                            data : response.jeronimosql,
                        }
                    ] 
                }
                var SanLorenzo = {
                    labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    datasets : [
                        {
                            fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                            strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                            highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                            highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                            data : response.lorenzosql,
                        }
                    ] 
                }
                var SanPablo = {
                    labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    datasets : [
                        {
                            fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                            strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                            highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                            highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                            data : response.pablosql,
                        }
                    ] 
                }
                var SanPedro = {
                    labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    datasets : [
                        {
                            fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                            strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                            highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                            highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                            data : response.pedrosql,
                        }
                    ] 
                }
                var SanSalvador = {
                    labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    datasets : [
                        {
                            fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                            strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                            highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                            highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                            data : response.salvadorsql,
                        }
                    ] 
                }
                var contexto = document.getElementById('tecomitl').getContext('2d');
                window.Barra = new Chart(contexto).Line(tecomitl, { responsive : true });
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
                var contexto = document.getElementById('bartolome').getContext('2d');
                window.Barra = new Chart(contexto).Line(SanBartolome, { responsive : true });
                Barra.clear(); 
                var contexto = document.getElementById('jeronimo').getContext('2d');
                window.Barra = new Chart(contexto).Line(SanJeronimo, { responsive : true });
                Barra.clear();  
                var contexto = document.getElementById('lorenzo').getContext('2d');
                window.Barra = new Chart(contexto).Line(SanLorenzo, { responsive : true });
                Barra.clear();  
                var contexto = document.getElementById('pablo').getContext('2d');
                window.Barra = new Chart(contexto).Line(SanPablo, { responsive : true });
                Barra.clear();  
                var contexto = document.getElementById('pedro').getContext('2d');
                window.Barra = new Chart(contexto).Line(SanPedro, { responsive : true });
                Barra.clear();  
                var contexto = document.getElementById('salvador').getContext('2d');
                window.Barra = new Chart(contexto).Line(SanSalvador, { responsive : true });
                Barra.clear();              
            },
        }
    );
    return false;

    function mostraResultado() {
        $('.resultados').html('<canvas id="tecomitl"></canvas>');
        $.ajax(
            {
                type: 'POST',
                url: '../procesos/grafico/datosPoblados.php',
                data: {
                    'year': $('#year').val(),
                    'delito': $('#delito').val(),
                },
                dataType: 'JSON',
                success: function(response){
                    var tecomitl = {
                        labels : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                        datasets : [
                            {
                                fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                                strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                                highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                                highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                                data : response.tecomitlsql,
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
                                data : response.milpasql,
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
                                data : response.franciscosql,
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
                                data : response.ohtencosql,
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
                                data : response.tepenahuacsql,
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
                                data : response.tlacotencosql,
                            }
                        ] 
                    }
                    var contexto = document.getElementById('tecomitl').getContext('2d');
                    window.Barra = new Chart(contexto).Line(tecomitl, { responsive : true });
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
                    var contexto = document.getElementById('tlacotenco').getContext('2d');
                    window.Barra = new Chart(contexto).Line(SantaAna, { responsive : true });
                    Barra.clear(); 
                    var contexto = document.getElementById('tlacotenco').getContext('2d');
                    window.Barra = new Chart(contexto).Line(SantaAna, { responsive : true });
                    Barra.clear();  
                    var contexto = document.getElementById('tlacotenco').getContext('2d');
                    window.Barra = new Chart(contexto).Line(SantaAna, { responsive : true });
                    Barra.clear();  
                    var contexto = document.getElementById('tlacotenco').getContext('2d');
                    window.Barra = new Chart(contexto).Line(SantaAna, { responsive : true });
                    Barra.clear();  
                    var contexto = document.getElementById('tlacotenco').getContext('2d');
                    window.Barra = new Chart(contexto).Line(SantaAna, { responsive : true });
                    Barra.clear();  
                    var contexto = document.getElementById('tlacotenco').getContext('2d');
                    window.Barra = new Chart(contexto).Line(SantaAna, { responsive : true });
                    Barra.clear();              
                },
            }
        );
        return false;
    
    }
}
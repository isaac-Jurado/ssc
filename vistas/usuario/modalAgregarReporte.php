
<form id="formularioagregarReporte" method="POST" onsubmit="return agregarNuevoReporte()">
    <div class="modal fade" id="modalAgregarReportes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo reporte</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <label for="delito" >Agregar delito:</label>
                            <select type="text" class="form-control" id="delito" name="delito" required>
                            <option value=""></option>
                                <option value="">Robo a transeunte</option>
                                <option value="">Robo a casa habitación</option>
                                <option value="">Robo a comercio</option>
                                <option value="">Robo en transporte publico</option>
                                <option value="">Robo a camiones repartidores</option>
                                <option value="">Violación</option>
                                <option value="">Abuso sexual</option>
                                <option value="">Faltas administrativas</option>
                                <option value="">Violencia familiar</option>
                                <option value="">Violencia de genero</option>
                                <option value="">Violencia contra niños y adolecentes</option>
                                <option value="">Desaparicion de personas</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label for="poblado" >Agregar poblado:</label>
                            <select type="text" class="form-control" id="poblado" name="poblado" required>
                                <option value=""></option>
                                <option value="agustin">San Agustin </option>
                                <option value="bartolome">San Bartolome</option>
                                <option value="pedro">San Pedro</option>
                                <option value="ana">Santa Ana</option>
                                <option value="jeronimo">San Jeronimo</option>
                                <option value="lorenzo">San Lorenzo</option>
                                <option value="francisco">San Francisco</option>
                                <option value="tecomitl">Tecomitl</option>
                                <option value="tepenahuac">San Juan Tepenahuac</option>
                                <option value="salvador">San Salvador</option>
                                <option value="pablo">San Pablo</option>
                                <option value="villa">Villa Milpa Alta</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label for="tiempo" >Tiempo:</label>
                            <input type="time" class="form-control" id="tiempo" name="tiempo" required></inpit>
                        </div>
                        <div class="col-sm-3">
                            <label for="fecha" >Fecha:</label>
                            <input type="date" class="form-control" id="fecha" name="fecha" required></inpit>
                        </div>
                        <div class="col-sm-3">
                        <label for="poblado" >lugar:</label>
                            <select type="text" class="form-control" id="poblado" name="poblado" required>
                                <option value=""></option>
                                <option value="">Propiedad privada</option>
                                <option value="">Via publica</option>
                                <option value="">Establecimiento</option>
                                
                            </select>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="sexoV" >Sexo de la victima:</label>
                            <select type="text" class="form-control" id="sexoV" name="sexoV" required>
                            <option value=""></option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="sexoA" >Sexo del agresor:</label>
                            <select type="text" class="form-control" id="sexoA" name="sexoA" required>
                                <option value=""></option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="transporteA" >Transporte del agresor:</label>
                            <select type="text" class="form-control" id="transporteA" name="transporteA" required>
                                <option value=""></option>
                                <option value="M">A pie</option>
                                <option value="F">Automovil</option>
                                <option value="F">Motocicleta</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="transporteV" >Transporte de la victima:</label>
                            <select type="text" class="form-control" id="transporteV" name="transporteV" required>
                                <option value=""></option>
                                <option value="peaton">Peaton</option>
                                <option value="auto">Automovil</option>
                                <option value="moto">Motocicleta</option>
                                <option value="Tpublico">Transporte publico</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="observaciones" >Mas observaciones</label>
                            <textarea type="text" class="form-control" id="observaciones" name="observaciones" required>
                                
                                </textarea>
                            </div>
                        </div>
    
                <div class="modal-footer">
                    <span class="btn btn-secondary" data-dismiss="modal">cerrar</span>
                    <button class="btn btn-primary">Agregrar</button>
                </div>
            </div>
        </div>
    </div>
</form>

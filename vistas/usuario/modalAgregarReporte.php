
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
                                <option value=""></option>
                                <option value="agustin">Robo</option>
                                <option value="bartolome">Asalto</option>
                                <option value="pedro"></option>
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
                            <label for="poblado" >Agregar poblado:</label>
                            <select type="text" class="form-control" id="poblado" name="poblado" required>
                            <option value=""></option>
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
                                <option value=""></option>
                                <option value="agustin">propieda privad </option>
                                <option value="bartolome">via publica</option>
                                <option value="pedro">establecimineto</option>
                                <option value="villa">Villa Milpa Alta</option>
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
                        <hr style="background-color: black;">
                    </div>
                    <h2>incidentes</h2>
                    <div class="row">
                        <div class="col-sm-3">campo</div>
                        <div class="col-sm-3">campo</div>
                        <div class="col-sm-3">campo</div>
                        <div class="col-sm-3">campo</div>
                    </div>
                <div class="modal-footer">
                    <span class="btn btn-secondary" data-dismiss="modal">cerrar</span>
                    <button class="btn btn-primary">Agregrar</button>
                </div>
            </div>
        </div>
    </div>
</form>

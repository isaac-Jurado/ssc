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
                            <label for="delito">Agregar delito:</label>
                            <div id="listadoDelito"></div>
                        </div>
                        <div class="col-sm-3">
                            <label for="poblado">Agregar poblado:</label>
                            <select type="text" class="form-control" id="poblado" name="poblado" required>
                                <option value=""></option>
                                <option value="1">San Agustin </option>
                                <option value="3">San Bartolome</option>
                                <option value="9">San Pedro</option>
                                <option value="11">Santa Ana</option>
                                <option value="5">San Jeronimo</option>
                                <option value="7">San Lorenzo</option>
                                <option value="4">San Francisco</option>
                                <option value="2">Tecomitl</option>
                                <option value="6">San Juan Tepenahuac</option>
                                <option value="10">San Salvador</option>
                                <option value="8">San Pablo</option>
                                <option value="12">Villa Milpa Alta</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label for="tiempo">Tiempo:</label>
                            <input type="time" class="form-control" id="tiempo" name="tiempo" required></inpit>
                        </div>
                        <div class="col-sm-3">
                            <label for="fecha">Fecha:</label>
                            <input type="date" class="form-control" id="fecha" name="fecha" required></inpit>
                        </div>
                        <div class="col-sm-3">
                            <label for="lugar">lugar:</label>
                            <select type="text" class="form-control" id="lugar" name="lugar" required>
                                <option value=""></option>
                                <option value="1">Propiedad privada</option>
                                <option value="2">Via publica</option>


                            </select>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="sexoV">Sexo de la victima:</label>
                            <select type="text" class="form-control" id="sexoV" name="sexoV" required>
                                <option value=""></option>
                                <option value="2">Masculino</option>
                                <option value="1">Femenino</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="sexoA">Sexo del agresor:</label>
                            <select type="text" class="form-control" id="sexoA" name="sexoA" required>
                                <option value=""></option>
                                <option value="2">Masculino</option>
                                <option value="1">Femenino</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="transporteA">Transporte del agresor:</label>
                            <select type="text" class="form-control" id="transporteA" name="transporteA" required>
                                <option value=""></option>
                                <option value="1">A pie</option>
                                <option value="2">Automovil</option>
                                <option value="3">Motocicleta</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="transporteV">Transporte de la victima:</label>
                            <select type="text" class="form-control" id="transporteV" name="transporteV" required>
                                <option value=""></option>
                                <option value="1">Peaton</option>
                                <option value="2">Automovil</option>
                                <option value="3">Motocicleta</option>
                                <option value="4">Transporte publico</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <label for="observaciones">Mas observaciones</label>
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

<form id="frmAgregarDelito" method="POST" onsubmit="return agregarNuevoDelito()">
    <div class="modal fade" id="modalAgregarDelito" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar nueva categoria de delito</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                    <label for="Delito">Nombre del delito</label>
                    <input type="text" class="form-control" id="Delito" name="Delito" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span  class="btn btn-danger" data-dismiss="modal">Cerrar</span>
                <button class="btn btn-primary">Agregrar</button>
            </div>
        </div>
    </div>
</div>
</form>

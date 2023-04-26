
<form id="formularioactualizarusuario" method="POST" onsubmit="return actualizarUsuario()">
    <div class="modal fade" id="modalActualizarUsuarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <label for="firstnameUpdate">Apellido Paterno</label>
                        <input type="text" class="form-control" id="firstnameUpdate" name="firstnameUpdate" required>
                    </div>
                    <div class="col-sm-4">
                        <label for="lastnameUpdate">Apellido Materno</label>
                        <input type="text" class="form-control" id="lastnameUpdate" name="lastnameUpdate" required>
                    </div>
                    <div class="col-sm-4">
                        <label for="nameUpdate">Nombre</label>
                        <input type="text" class="form-control" id="nameUpdate" name="nameUpdate" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="numberUpdate">Telefono</label>
                        <input type="number" class="form-control" id="numberUpdate" name="numberUpdate" required>
                    </div>
                    <div class="col-sm-4">
                        <label for="userUpdate"> Usuario</label>
                        <input type="text" class="form-control" id="userUpdate" name="userUpdate" required>
                    </div>
                    <div class="col-sm-4">
                        <label for="passwordUpdate">Contraseña</label>
                        <input type="password" class="form-control" id="passwordUpdate" name="passwordUpdate" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="rolUpdate">Rol</label>
                        <select name="rolUpdate" id="rolUpdate" class="form-control">
                            <option value="1">Usuario</option>
                            <option value="2">Administrador</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="locationUpdate"> Ubicacion</label>
                        <textarea  id="locationUpdate" name="locationUpdate" class="form-control" required></textarea> 
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span  class="btn btn-secondary" data-dismiss="modal">Close</span>
                <button class="btn btn-warning">Actualizar</button>
            </div>
        </div>
    </div>
</div>
</form>

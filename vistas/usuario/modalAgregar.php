
<form id="formularioagregarusuario" method="POST" onsubmit="return agregarNuevoUsuario()">
    <div class="modal fade" id="modalAgregarUsuarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <label for="firstname">Apellido Paterno</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                    <div class="col-sm-4">
                        <label for="lastname">Apellido Materno</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                    <div class="col-sm-4">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="number">Telefono</label>
                        <input type="number" class="form-control" id="number" name="number" required>
                    </div>
                    <div class="col-sm-4">
                        <label for="user"> Usuario</label>
                        <input type="text" class="form-control" id="user" name="user" required>
                    </div>
                    <div class="col-sm-4">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="rol">Rol</label>
                        <select name="rol" id="rol" class="form-control">
                            <option value="1">Usuario</option>
                            <option value="2">Administrador</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="location"> Ubicacion</label>
                        <textarea  id="location" name="location" class="form-control" required></textarea> 
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span  class="btn btn-secondary" data-dismiss="modal">Close</span>
                <button class="btn btn-primary">Agregrar</button>
            </div>
        </div>
    </div>
</div>
</form>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#crearUsuario">
  Nuevo
</button>

<!-- Modal -->
<div class="modal fade" id="crearUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('users.create')}}" method="POST">
        {{ csrf_field() }}
          <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="name" class="form-control" placeholder="Inserte Nombre" required>
          </div>
          <div class="form-group">
            <label>Correo Electronico</label>
            <input type="email" name="email" class="form-control" placeholder="Inserte Correo" required>
          </div>
          <div class="form-group">
            <label>Rol de Usuario</label>
            <select name="rol" id="rol" type="text" class="form-control">
              <option value="administrador">Administrador</option>
              <option value="editor">Editor</option>
            </select>
          </div>
          <div class="form-group">
            <label>Contraseña</label>
            <input type="password" name="password" class="form-control" placeholder="Inserte Clave" required>
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>  
        </form>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>

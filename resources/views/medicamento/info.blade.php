<!-- Modal edit medicamento -->
<div class="modal fade" id="edit{{$medicamento->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR MEDICAMENTO</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('medicamentos.update', $medicamento->id) }}" method="post">
          @csrf
          @method('PUT')
          <div class="modal-body">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="" value="{{$medicamento->nombre}}"/>
            </div>
  
            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripción</label>
              <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="" value="{{$medicamento->descripcion}}"/>
            </div>
            <div class="mb-3">
              <label for="fecha_caducidad" class="form-label">Fecha de Caducidad</label>
              <input type="date" class="form-control" name="fecha_caducidad" id="fecha_caducidad" aria-describedby="helpId" placeholder="" value="{{$medicamento->fecha_caducidad}}"/>
            </div>
            <div class="mb-3">
              <label for="precio" class="form-label">Precio</label>
              <input type="text" class="form-control" name="precio" id="precio" aria-describedby="helpId" placeholder="" value="{{$medicamento->precio}}"/>
            </div>
            <div class="mb-3">
              <label for="id_proveedor" class="form-label">ID Proveedor</label>
              <input type="text" class="form-control" name="id_proveedor" id="id_proveedor" aria-describedby="helpId" placeholder="" value="{{$medicamento->id_proveedor}}"/>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  








  <!-- Modal edit medicamento -->
<div class="modal fade" id="delete{{$medicamento->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR MEDICAMENTO</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('medicamentos.destroy', $medicamento->id) }}" method="post">
          @csrf
          @method('DELETE')
          <div class="modal-body">
            ESTAS SEGURO DE QUEREE ELIMINAR A <strong>{{$medicamento->nombre}}?</strong>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Confirmar</button>
          </div>
        </form>
      </div>
    </div>
  </div>







    <!-- Modal mostrar medicamento -->
<div class="modal fade" id="show{{$medicamento->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR MEDICAMENTO</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('medicamentos.destroy', $medicamento->id) }}" method="post">
          @csrf
          <div class="modal-body">
            ID: <strong>{{$medicamento->id}}</strong>
            <br>
            NOMBRE: <strong>{{$medicamento->nombre}}</strong>
            <br>
            DESCRIPCION: <strong>{{$medicamento->descripcion}}</strong>
            <br>
            FECHA DE CADUCIDAD: <strong>{{$medicamento->fecha_caducidad}}</strong>
            <br>
            PRECIO: <strong>{{$medicamento->precio}}</strong>
            <br>
            ID PROVEEDOR: <strong>{{$medicamento->id_proveedor}}</strong>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

          </div>
        </form>
      </div>
    </div>
  </div>
  
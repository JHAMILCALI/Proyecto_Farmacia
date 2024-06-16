  <!-- Modal edit mediacemnto -->
  <div class="modal fade" id="edit{{$proveedor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR PROEEDOR</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('proveedores.update',$proveedor->id)}}" method="post">
            @csrf
            @method('PUT')
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input
                type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$proveedor->nombre}}"//>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input
                type="text" class="form-control" name="telefono" id="" aria-describedby="helpId" placeholder="" value="{{$proveedor->telefono}}"//>
          </div>
         
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
        </div>
    </form>
      </div>
    </div>
  </div>








  <!-- Modal edit medicamento -->
  <div class="modal fade" id="delete{{$proveedor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR MEDICAMENTO</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="post">
          @csrf
          @method('DELETE')
          <div class="modal-body">
            ESTAS SEGURO DE QUEREE ELIMINAR A <strong>{{$proveedor->nombre}}?</strong>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Confirmar</button>
          </div>
        </form>
      </div>
    </div>
  </div>





  <!-- Modal edit medicamento -->
  <div class="modal fade" id="show{{$proveedor->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">MOSTRAR DATO PROVEEDOR</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('proveedores.show', $proveedor->id) }}" method="post">
          @csrf
          <div class="modal-body">
            ID: <strong>{{$proveedor->id}}</strong>
            <br>
            NOMBRE: <strong>{{$proveedor->nombre}}</strong>
            <br>
            TELEFONO: <strong>{{$proveedor->telefono}}</strong>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
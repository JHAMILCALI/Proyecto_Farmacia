  <!-- Modal crewate mediacemnto -->
  <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">AGREGAR MEDICAMENTO</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('medicamentos.store')}}" method="post">
            @csrf
        <div class="modal-body">
          <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input
                type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder=""/>
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input
                type="text" class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder=""/>
          </div>
          <div class="mb-3">
            <label for="fecha_caducidad" class="form-label">Fecha de Caducidad</label>
            <input type="date" class="form-control" name="fecha_caducidad" id="fecha_caducidad" aria-describedby="helpId" placeholder=""/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input
                type="text" class="form-control" name="precio" id="" aria-describedby="helpId" placeholder=""/>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">ID Proveedor</label>
            <input
                type="text" class="form-control" name="id_proveedor" id="" aria-describedby="helpId" placeholder=""/>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
      </div>
    </div>
  </div>
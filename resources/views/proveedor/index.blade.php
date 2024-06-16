@extends('welcome')
@section('content')

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
    Nuevo
  </button>
  
<div class="table-responsive">
    <br>
    <table
        class="table"
    >
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">TELEFONO</th>
                <th>ACIONES</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                @foreach ($proveedores as $proveedor)
                <tr class="">
                    <td scope="row">{{$proveedor->id}}</td>
                    <td>{{$proveedor->nombre}}</td>
                    <td>{{$proveedor->telefono}}</td>
                    <td>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$proveedor->id}}">
                            Editar
                        </button>
                        
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$proveedor->id}}">
                            Eliminar
                          </button>
                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#show{{$proveedor->id}}">
                            Mostrar
                          </button>
                          
                    </td>
                </tr>
                @include('proveedor.info') 
                @endforeach
                
            </tr>
            
        </tbody>
    </table>
</div>

@include('proveedor.create')   
@endsection

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
                <th scope="col">DESCRIPCION</th>
                <th scope="col">FECHA DE CADUCIDAD</th>
                <th scope="col">PRECIO</th>
                <th scope="col">ID PROVEDOR</th>
                <th>ACIONES</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                @foreach ($medicamentos as $medicamento)
                <tr class="">
                    <td scope="row">{{$medicamento->id}}</td>
                    <td>{{$medicamento->nombre}}</td>
                    <td>{{$medicamento->descripcion}}</td> 
                    <td>{{$medicamento->fecha_caducidad}}</td> 
                    <td>{{$medicamento->precio}}</td> 
                    <td>{{$medicamento->id_proveedor}}</td> 
                    <td>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$medicamento->id}}">
                            Editar
                        </button>
                        
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$medicamento->id}}">
                            Eliminar
                          </button>
                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#show{{$medicamento->id}}">
                            Mostrar
                          </button>
                          
                          
                    </td>
                </tr>
                @include('medicamento.info') 
                @endforeach
                
            </tr>
            
        </tbody>
    </table>
</div>

@include('medicamento.create')   
@endsection

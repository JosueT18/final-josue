
@if(Auth::check())
@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
@section('content')
<!-- <a class="btn btn-primary mx-2 my-2" href="{{url('/alumnos/create')}}">Agregar</a> -->

   
    <table class="table mx-2">
        <h1>Lista de Alumnos cargados</h1>
        <thead>
        <a class="btn btn-primary mx-2 my-2" href="{{url('/alumnos/create')}}">Agregar</a>  
          <tr>
            <th scope="col">Apellido</th>
            <th scope="col">Nombre</th>
            <th scope="col">DNI</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Telefono</th>
            <th scope="col">Email</th>
            <th scope="col">Direccion</th>
            <th scope="col">Piso</th>
            <th scope="col">Dpto</th>
            <th scope="col">Numero</th>
            <th scope="col">Barrio</th>
            <th scope="col">Localidad</th>
            <th scope="col">Provincia</th>
            <th scope="col">CodigoPostal</th>
            <th scope="col">Fecha de Alta</th>
            <th scope="col">Fecha de Baja</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>          
        @foreach ($alumnos as $alumnos)
        <tr>
            <td>{{$alumnos->apellido}}</td>
            <td>{{$alumnos->nombre}}</td>
            <td>{{$alumnos->dni}}</td>
            <td>{{$alumnos->fecha_nacimiento}}</td>
            <td>{{$alumnos->telefono}}</td>
            <td>{{$alumnos->email}}</td>
            <td>{{$alumnos->direccion}}</td>
            <td>{{$alumnos->piso}}</td>
            <td>{{$alumnos->depto}}</td>
            <td>{{$alumnos->calleAltura}}</td>
            <td>{{$alumnos->barrio}}</td>
            <td>{{$alumnos->localidad}}</td>
            <td>{{$alumnos->provincia}}</td>
            <td>{{$alumnos->codigoPostal}}</td>
            <td>{{$alumnos->fechaAlta}}</td>
            <td>{{$alumnos->fechaBaja}}</td>
            <td>
                <div class="btn-group">
                        <div class="col-md-6">
                            <a class="btn btn-primary btn-sm" href="{{ url('/alumnos/edit/'.$alumnos->id) }}"><i class="fas fa-edit" title="Editar"></i></a>
                        </div>                        
                        <div class="col-md-6">
                            <form method="POST" action="{{ url("/alumnos/delete/{$alumnos->id}") }}">
                                @csrf
                                @method('DELETE')                        
                                <button class="btn btn-danger btn-sm" type="submit">
                                    <i class="fa fa-trash" aria-hidden="true" title="Eliminar"></i>
                                </button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-primary btn-sm" href="{{ url('/alumnos/show/'.$alumnos->id) }}"><i class="fas fa-eye" title="Mostrar"></i></a>
                        </div>                         
                    </div> 
            </td>
        </tr>
    @endforeach            
        </tbody>
      </table>
@endsection
@endif
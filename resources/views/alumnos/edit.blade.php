@if(Auth::check())
@extends('layouts.app')
@section('content')
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<div class="form-group">
    <h1 class="mx-2 fw-bold">Editar los datos del alumno</h1>
    <div class="container">
        <form method="post" action="{{ url('/alumnos/update/'.$alumnos -> id) }}">		
            @csrf
            @method('put')
                <h2>Apellido</h2>
                <input type="text"  class="form-control" name="apellido" value="{{ $alumnos -> apellido }}">
                <h2>Nombre</h2>
                <input type="text"  class="form-control" name="nombre" value="{{ $alumnos -> nombre }}">
                <h2>DNI</h2>
                <input type="number"  class="form-control" name="dni" value="{{ $alumnos -> dni }}">
                <h2>Fecha de Nacimiento</h2>
                <input type="date"  class="form-control" name="fecha_nacimiento" value="{{ $alumnos -> fecha_nacimiento }}">
                <h2>Telefono</h2>
                <input type="number"  class="form-control" name="telefono" value="{{ $alumnos -> telefono }}">
                <h2>E-mail</h2>
                <input type="email"  class="form-control" name="email" value="{{ $alumnos -> email }}">
                <h2>Dirección</h2>
                <input type="text"  class="form-control" name="direccion" value="{{ $alumnos -> direccion }}">
                <h2>Piso</h2>
                <input type="text"  class="form-control" name="piso" value="{{ $alumnos -> piso }}">
                <h2>Dpto</h2>
                <input type="text"  class="form-control" name="dpto" value="{{ $alumnos -> dpto }}">
                <h2>Altura</h2>
                <input type="number"  class="form-control" name="calleAltura" value="{{ $alumnos -> calleAltura }}">
                <h2>Barrio</h2>
                <input type="text"  class="form-control" name="barrio" value="{{ $alumnos -> barrio }}">
                <h2>Localidad</h2>
                <input type="text"  class="form-control" name="localidad" value="{{ $alumnos -> localidad }}">
                <h2>Provincia</h2>
                <input type="text"  class="form-control" name="provincia" value="{{ $alumnos -> provincia }}">
                <h2>Codigo Postal</h2>
                <input type="number"  class="form-control" name="codigoPostal" value="{{ $alumnos -> codigoPostal }}">                               
                <h2>Fecha de Alta</h2>
                <input type="date"  class="form-control" name="fechaAlta" value="{{ $alumnos -> fechaAlta }}">
                <h2>Fecha de Baja</h2>
                <input type="date"  class="form-control" name="fechaBaja" value="{{ $alumnos -> fechaBaja }}">
                <button type="submit" class="btn btn-warning mt-2">Guardar</button>
        </form>
    </div>
    <script type="text/javascript" src="{{ asset('mascara.js') }}"></script> 
</div>
@endsection
@endif
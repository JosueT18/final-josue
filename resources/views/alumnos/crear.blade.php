@if(Auth::check())
@extends('layouts.app')
@section('content')
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <div class="form-group">
        <h1 class="mx-2 fw-bold">Ingrese un alumno a la lista</h1>
        <div class="container">
            <form action="{{route('alumnos.store')}}" method="post" >
                @csrf
                <label>Apellido</label>
                <input type="text" class="form-control" name="apellido">
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre">
                <label >DNI</label>
                <input type="number" class="form-control"name="dni">
                <label >Fecha de Nacimiento</label>
                <input type="date" class="form-control"name="fecha_nacimiento">
                <label >Telefono</label>
                <input type="number" class="form-control" name="telefono">
                <label >E-mail</label>
                <input type="email" class="form-control" name="email">
                <label >Direccion</label>
                <input type="text" class="form-control" name="direccion">
                <label >Piso</label>
                <input type="text" class="form-control" name="piso">
                <label >Dpto</label>
                <input type="text" class="form-control" name="dpto">
                <label >Altura</label>
                <input type="number" class="form-control" name="calleAltura">
                <label >Barrio</label>
                <input type="text" class="form-control" name="barrio">
                <label >Localidad</label>
                <input type="text" class="form-control" name="localidad">
                <label >Provincia</label>
                <input type="text" class="form-control" name="provincia">
                <label >Codigo Postal</label>
                <input type="number" class="form-control" name="codigoPostal">             
                <label >Fecha de Alta</label>
                <input type="date" class="form-control" name="fechaAlta">
                <label >Fecha de Baja</label>
                <input type="date" class="form-control" name="fechaBaja">
                <button type="submit" class="btn btn-success mt-2">Agregar alumno</button>
            </form>    
        </div>
        <script type="text/javascript" src="{{ asset('mascara.js') }}"></script> 
</div>
@endsection
@endif
@if(Auth::check())
@extends('layouts.app')
@section('content')
<center>
    <h1>Datos del alumno:</h1>
<div class="container">
    <h3>Apellido:</h3>
    <p>{{$alumnos -> apellido}}</p>
    <h3>Nombre:</h3>
    <p>{{ $alumnos -> nombre }}</p>
    <h3>DNI:</h3>
    <p>{{$alumnos -> dni}}</p>
    <h3>Fecha de Nacimiento:</h3>
    <p>{{ \Carbon\Carbon::parse($alumnos->fecha_nacimiento)->format('d/m/Y') }}</p>
    <!-- <p>{{ \Carbon\Carbon::parse($alumnos->fecha_nacimiento)->format('Y/m/d') }}</p> -->
    <h3>Telefono:</h3>
    <p>{{$alumnos -> telefono }}</p>
    <h3>E-mail:</h3>
    <p>{{$alumnos -> email }}</p>
    <h3>Direccion:</h3>
    <p>{{$alumnos -> direccion }}</p>
    <h3>Piso:</h3>
    <p>{{$alumnos -> piso }}</p>
    <h3>Dpto:</h3>
    <p>{{$alumnos -> dpto }}</p>
    <h3>Altura:</h3>
    <p>{{$alumnos -> calleAltura }}</p>
    <h3>Barrio:</h3>
    <p>{{$alumnos -> barrio}}</p>
    <h3>Localidad:</h3>
    <p>{{$alumnos -> localidad}}</p>
    <h3>Provincia:</h3>
    <p>{{$alumnos -> provincia}}</p>
    <h3>Codigo Postal:</h3>
    <p>{{$alumnos -> codigoPostal}}</p>
    <h3>Fecha de Alta:</h3>
    <p>{{ \Carbon\Carbon::parse($alumnos->fechaAlta)->format('d/m/Y') }}</p>
    <!-- <p>{{ \Carbon\Carbon::parse($alumnos->fechaAlta)->format('Y/m/d') }}</p> -->
    <h3>Fecha de Baja:</h3>
    <p>{{ \Carbon\Carbon::parse($alumnos->fechaBaja)->format('d/m/Y') }}</p>
    <!-- <p>{{ \Carbon\Carbon::parse($alumnos->fechaBaja)->format('Y/m/d') }}</p> -->
</div>
</center>
@endsection
@endif
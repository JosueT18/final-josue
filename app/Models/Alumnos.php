<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;
    protected $table = 'alumnos';

    protected $fillable = [
        'apellido',
        'nombre',
        'dni',
        'fecha_nacimiento',
        'telefono',
        'email',
        'direccion',
        'piso',
        'depto',
        'calleAltura',
        'barrio',
        'localidad',
        'provincia',
        'codigoPostal',
        'fechaAlta',
        'fechaBaja'
    ];  
}

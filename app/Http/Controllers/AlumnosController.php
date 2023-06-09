<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = DB::table('alumnos')->get();

        return view('Alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Alumnos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = request()->validate([
            'apellido'=>['required', 'string', 'max:20'],
            'nombre'=>['required', 'string', 'max:20'], 
            'dni'=>['required', 'integer', 'max:200'],
            'fecha_nacimiento'=>['required'], 
            'telefono'=>['required','integer','max:200'],
            'email'=>['required', 'string', 'max:20'],
            'direccion'=>['required', 'string', 'max:20'],
            'piso'=>['required','string','max:200'],
            'dpto'=>['required','string','max:200'],
            'calleAltura'=>['required','integer','max:200'],
            'barrio'=>['required', 'string', 'max:20'],
            'localidad'=>['required', 'string', 'max:20'],
            'provincia'=>['required', 'string', 'max:20'],
            'codigoPostal'=>['required','integer','max:200'],
            'fechaAlta'=>['required'],
            'fechaBaja'=>['required'], 

        ]);

        DB::table('alumnos')->insert([
            'apellido'=>$datos['apellido'],
            'nombre'=>$datos['nombre'],
            'dni'=>$datos['dni'],
            'fecha_nacimiento'=>$datos['fecha_nacimiento'],
            'telefono'=>$datos['telefono'],
            'email'=>$datos['email'],
            'direccion'=>$datos['direccion'],
            'piso'=>$datos['piso'],
            'dpto'=>$datos['dpto'],
            'calleAltura'=>$datos['calleAltura'],
            'barrio'=>$datos['barrio'],
            'localidad'=>$datos['localidad'],
            'provincia'=>$datos['provincia'],
            'codigoPostal'=>$datos['codigoPostal'],
            'fechaAlta'=>$datos['fechaAlta'],
            'fechaBaja'=>$datos['fechaBaja'],
        ]);
        return redirect('/alumnos/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumnos = Alumnos::find($id);

        return view('Alumnos.mostrar', compact('alumnos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumnos = Alumnos::find($id);
        return view('Alumnos.edit',compact('alumnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = request()->validate([
            'apellido'=>['required', 'string', 'max:20'],
            'nombre'=>['required', 'string', 'max:20'], 
            'dni'=>['required', 'integer', 'max:200'],
            'fecha_nacimiento'=>['required'],
            'telefono'=>['required','integer','max:200'],
            'email'=>['required', 'string', 'max:20'],
            'direccion'=>['required', 'string', 'max:20'],
            'piso'=>['required','string','max:200'],
            'dpto'=>['required','string','max:200'],
            'calleAltura'=>['required','integer','max:200'],
            'barrio'=>['required', 'string', 'max:20'],
            'localidad'=>['required', 'string', 'max:20'],
            'provincia'=>['required', 'string', 'max:20'],
            'codigoPostal'=>['required','integer','max:200'],
            'fechaAlta'=>['required'],
            'fechaBaja'=>['required'], 

        ]);

        DB::table('alumnos')->insert([
            'apellido'=>$datos['apellido'],
            'nombre'=>$datos['nombre'],
            'dni'=>$datos['dni'],
            'fecha_nacimiento'=>$datos['fecha_nacimiento'],
            'telefono'=>$datos['telefono'],
            'email'=>$datos['email'],
            'direccion'=>$datos['direccion'],
            'piso'=>$datos['piso'],
            'dpto'=>$datos['dpto'],
            'calleAltura'=>$datos['calleAltura'],
            'barrio'=>$datos['barrio'],
            'localidad'=>$datos['localidad'],
            'provincia'=>$datos['provincia'],
            'codigoPostal'=>$datos['codigoPostal'],
            'fechaAlta'=>$datos['fechaAlta'],
            'fechaBaja'=>$datos['fechaBaja'],
        ]);
        return redirect('/alumnos/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('alumnos')
        ->where('id', $id)
        ->delete();        
        return redirect('/index');
    }
}

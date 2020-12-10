<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    
    public $rules = [
        "nombres" => ['required', 'string','max:60'],
        "apellidos" => ['required', 'string'],
        "identidad" => ['required', 'string'],
        "sexo_id" => ['required', 'numeric'],
        "etnia_id" => ['required', 'numeric'],
        "direccion" => ['required', 'string'],
        "celular" => ['required', 'string'],
        "fecha_nacimiento" => ['required', 'date'],
    ];

    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('app.estudiantes.index', compact("estudiantes"));
    }

   
    public function add()
    {     $model=false; 

        return view('app.estudiantes.add',compact("model"));
    }

   
    public function store(Request $request, Persona $model)
    {
        $campos = $this->validate($request, $this->rules);

        $model->create($campos);

        return redirect()->route('estudiante');
    }

    public function show(Estudiante $persona)
    {
        //
    }

    public function edit(Estudiante $model)
    {
        return view('app.estudiante.edit', compact('model'));
    }

    public function update(Request $request, Persona $model)
    {
        $campos=$this->validate($request,$this->rules);

        $model->update($campos);

        return redirect()->route('estudiante');
    }

    public function destroy(Estudiante $estudiante)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Collective\Html\Eloquent\FormAccessible;

class EstudiantesController extends Controller
{
    public $rules = [
        'estudiante' => ['required','string']
    ];

    public function index(Request $request)
    {
        $rows = Estudiante::query()
            ->orderBy('id', 'desc')
            ->get();

        return view('catalogos.estudiantes.index', compact('rows'));
    }

    public function add()
    {
        return view('catalogos.estudiantes.add');
    }

    public function show(Estudiante $model)
    {
        return view('catalogos.estudiantes.edit', compact('model'));
    }

    public function store(Request $request){
       // $campos=$this->validate($request,$this->rules);
        $model=Estudiante::query()->create($request->all());
        return redirect()->route('estudiantes');
    }

    public function update(Estudiante $model, Request $request)
    {
        $model->estudiante = $request->estudiante;
        $model->save();
        return redirect()->route('estudiantes');
    }

    public function destroy(Estudiante $model)
    {
        $model->delete();
        return redirect()->route('estudiantes');
    }
}

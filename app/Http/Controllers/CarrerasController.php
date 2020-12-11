<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;
use Collective\Html\Eloquent\FormAccessible;

class CarrerasController extends Controller
{
    public $rules = [
        'carrera' => ['required','string']
    ];

    public function index(Request $request)
    {
        $rows = Carrera::query()
            ->orderBy('id', 'desc')
            ->get();

        return view('catalogos.carreras.index', compact('rows'));
    }

    public function add()
    {
        return view('catalogos.carreras.add');
    }

    public function show(Carrera $model)
    {
        return view('catalogos.carreras.edit', compact('model'));
    }

    public function store(Request $request){
       // $campos=$this->validate($request,$this->rules);
        $model=Carrera::query()->create($request->all());
        return redirect()->route('carreras');
    }

    public function update(Carrera $model, Request $request)
    {
        $model->carrera = $request->carrera;
        $model->save();
        return redirect()->route('carreras');
    }

    public function destroy(Carrera $model)
    {
        $model->delete();
        return redirect()->route('carreras');
    }
}

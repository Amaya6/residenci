<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;
use Collective\Html\Eloquent\FormAccessible;

class CarrerasController extends Controller
{

    public function index(Request $request)
    {
        $rows = Carrera::query()
            ->orderBy('id', 'desc')
            ->get();

        return view('catalogos.carrera.index', compact('rows'));
    }

    public function add()
    {
        return view('catalogos.carrera.add');
    }

    public function show(Carrera $model)
    {
        return view('catalogos.carrera.edit', compact('model'));
    }

    public function store(Request $request)
    {
        $model = new Carrera;
        $model->carrera = $request->carrera;
        $model->save();
        return redirect()->route('carrera');
    }

    public function update(Carrera $model, Request $request)
    {
        $model->carrera = $request->carrera;
        $model->save();
        return redirect()->route('carrera');
    }

    public function destroy(Carrera $model)
    {
        $model->delete();
        return redirect()->route('carrera');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RolesController extends Controller
{

    public $rules = [
        "actividad" => ['required', 'string','max:60'],
        "estudiante_id" => ['required', 'numeric'],
        "area_id" => ['required', 'numeric'],
        "fecha" => ['required', 'date'],
       
    ];

    public function index()
    {
        $roles = Rol::all();
        return view('app.roles.index', compact("roles"));
    }

   
    public function add()
    {     $model=false; 
        return view('app.roles.add',compact("model"));
    }

   
    public function store(Request $request, Rol $model)
    {
        $campos = $this->validate($request, $this->rules);

        $model->create($campos);

        return redirect()->route('rol');
    }

    public function show(Rol $rol)
    {
        //
    }

    public function edit(Rol $model)
    {
        return view('app.roles.edit', compact('model'));
    }

    public function update(Request $request, Rol $model)
    {
        $campos=$this->validate($request,$this->rules);

        $model->update($campos);

        return redirect()->route('rol');
    }

    public function destroy(Rol $rol)
    {
        //
    }
}
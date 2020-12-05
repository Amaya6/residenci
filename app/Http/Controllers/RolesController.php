<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function store(Request $request)
    {       

        $model = new Rol;

        $model->estudiantes_id = $request->municipio_id;
        $model->estudiantes_id = $request->actvidades_id;
        $model->estudiantes_id = $request->areas_id;
        $model->estudiantes_id = $request->diasemana_id;
        $model->estudiantes_id = $request->semana_id;
        $model->fecha = $request->fecha;

        $model->save();
    }
}

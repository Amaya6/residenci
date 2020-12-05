<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Carrera;
use Illuminate\Http\Request;

class CatalogosController extends Controller
{
    public function getCarreras(Request $request)
    {

        $rows=Carrera::query()
        ->get();

        $data=[
            'data'=>$rows
        ];

        return response()->json($data);
    }
}

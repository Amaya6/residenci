<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Sexo;
use Illuminate\Http\Request;

class ApiAppsController extends Controller
{
    public function areas(Request $request){
        $rows=Area::all();
        $data=[
            'data'=>$rows
        ];
        return response()->json($data,200);
    }

    public function sexos(){
        $rows=Sexo::all();
        $data=[
            'data'=>$rows
        ];
        return response()->json($data,200);
    }
}

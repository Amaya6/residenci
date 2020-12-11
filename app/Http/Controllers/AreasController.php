<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class AreasController extends Controller
{

    public $rules = [
        'area' => ['required','string']
    ];

    public function index(Request $request)
    {

        $rows = Area::query()
            ->orderBy('id', 'desc')
            ->get();

        return view('catalogos.areas.index', compact('rows'));
    }

    public function add(){
        return view('catalogos.areas.add');
    }

    public function show (Area $model){
        return view('catalogos.area.edit', compact('model'));
    }

    public function store(Request $request){
        $model=new Area;
        $model->area=$request->area;
        $model->save();
        return redirect()->route('area');
    }

    public function update(Area $model, Request $request){
       $model->area=$request->area;
       $model->save();
       return redirect()->route('area');
    }

    public function destroy(Area $model){
        $model->delete();
        return redirect()->route('area');
    }
   
}

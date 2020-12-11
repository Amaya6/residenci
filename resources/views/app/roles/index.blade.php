@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Lista de estudiantes</h4>    
  </div>
 
  <div class="card-body">
    <div class="row">
        <div class="col-12">
            <a href="{!! route('roles.add') !!}">
                Agregar</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Código</th>
                <th>Actividas</th>
                <th>Area</th>
                <th>Estudiante</th>
                <th>Fecha</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $rol)
            <tr>
                <td scope="row">{{ $rol->id }} </td>
                <td>{{ $rol->actividad}} </td>
                <td>{{ $rol->sexo->area }} </td>
                <td>{{ $rol->etnia->estudiante }} </td>
                <td>{{ $rol->fecha }} </td>
                <td>
                    <a href="{!! route('persona.edit',$rol->id) !!} ">
                        <i class="fas fa-pen-alt    "></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection

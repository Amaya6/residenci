@extends('layouts.app')

@section('content')
<div class="jumbotron">
    {!! Form::open(['route' => 'listas']) !!}

    <div class="form-group">
        <label for="exampleInputEmail1">Area</label>
        <select-combustibles 
        url="/api-app/areas" 
        nombre="area_id" 
        label="area" />
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Sexo</label>
        <select-combustibles 
        url="/api-app/sexos" 
        nombre="sexo_id" 
        label="sexo_full" />
    </div>



    <div class="form-group">
        <label for="exampleInputEmail1">Etnia</label>
        <select-combustibles 
        url="/api-app/etnias" 
        nombre="etnia_id" 
        label="etnia" />
    </div>


    {!! Form::submit('Guardar') !!}
    {!! Form::close() !!}

</div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="container">
        {!! Form::model($model,['route' => ['estudiantes.update',$model->id],'method'=>'patch']) !!}
        @include('catalogos.estudiantes.fieldsEstudiantes')
        {!! Form::submit('Actualizar') !!}
        {!! Form::close() !!}
    </div>
@endsection
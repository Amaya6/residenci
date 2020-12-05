@extends('layouts.app')
@section('content')
    <div class="container">
        {!! Form::model($model,['route' => ['carrera.update',$model->id],'method'=>'patch']) !!}
        @include('catalogos.carreras.fieldCarreras')
        {!! Form::submit('Actualizar') !!}
        {!! Form::close() !!}
    </div>
@endsection

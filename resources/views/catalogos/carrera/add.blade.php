@extends('layouts.app')
@section('content')
<div class="container">
    {!! Form::open(['route' => 'carrera.store']) !!}
    @include('catalogos.carrera.fieldCarrera')
    {!! Form::submit('Guardar') !!}
    {!! Form::close() !!}
</div>
@endsection

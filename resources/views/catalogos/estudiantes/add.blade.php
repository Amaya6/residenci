@extends('layouts.app')
@section('content')
<div class="container">
    {!! Form::open(['route' => 'estudiantes.store']) !!}
    @include('catalogos.estudiantes.fieldsEstudiantes')
    {!! Form::submit('Guardar') !!}
    {!! Form::close() !!}
</div>
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    {!! Form::open(['route' => 'carreras.store']) !!}
    @include('catalogos.carreras.fieldCarreras')
    {!! Form::submit('Guardar') !!}
    {!! Form::close() !!}
</div>
@endsection

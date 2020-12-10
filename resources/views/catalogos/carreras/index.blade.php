@extends('layouts.app')
@section('content')
<a href="{{ route('carreras.add') }}" class="btn btn-info btn-sm">
    Nueva carrera
</a>

<div class="table-responsive">
    <table class="table table-sm">
        <thead>
            <tr class="bg-dark text-white">
            </tr>
        </thead>
        <tbody>
            @foreach($rows as $row)
            <tr>
                <td>{{ $row->id  }}</td>
                <td>{{ $row->carrera  }}</td>
                <td>
                    <div class="btn-group-sm">
                        {!! Form::open(['route' => ['carreras.delete',$row->id],'method' => 'delete']) !!}
                        {!! Form::token() !!}
                        <button type="submit" class="btn btn-danger btn-sm">
                            Eliminar
                        </button>
                        {!! Form::close() !!}
                        <a href="{{ route('carreras.edit',$row->id) }}" class="btn btn-danger btn-sm">
                            Editar
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
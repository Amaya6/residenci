@extends('layouts.app')
@section('content')
<a href="{!! route('carreras.add') !!}" class="btn btn-link">
    <i class="fas fa-plus-circle "></i> Agregar
</a>

<div class="table-responsive">
    <table class="table table-sm">
        <thead class='thead-light'>
            <tr role="rowheader">
                <th width="100">ID
                <th>Carrera</th>
                <th width="100"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($rows as $row)
            <tr>
                <td>{{ $row->id  }}</td>
                <td>{{ $row->carrera  }}</td>
                <td>
                   
                        
                    <div class="btn-group">
                        {!! Form::open(['route'=>['carreras.delete',$row->id],'method'=>'delete']) !!}
                        {!! Form::token() !!}
                        <button type="submit" class="btn btn-danger btn-sm">
                            Eliminar

                        </button>
                        
                        {!! Form::close() !!}
                        
                       <div>
                        <a href="{{route('carreras.edit',$row->id)}}" class="btn btn-success btn-sm">
                            Editar
                        </a></div>
                        
                        
                    </div>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <a href="{!! route('estudiantes.add') !!}" class="btn btn-link">
            <i class="fas fa-plus-circle "></i> Agregar
        </a>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead class='thead-light'>
                    <tr role="rowheader">
                        <th width="100">ID
                        <th>Estudiantes</th>
                        <th width="100"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rows as $row)
                    <tr role="row">
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->estudiante }}</td>

                       
                        <td>

                            <div class="btn-group">
                                {!! Form::open(['route'=>['estudiantes.delete',$row->id],'method'=>'delete']) !!}
                                {!! Form::token() !!}
                                <button type="submit" class="btn btn-danger btn-sm">
                                    Eliminar

                                </button>
                                
                                {!! Form::close() !!}
                                
                               <div>
                                <a href="{{route('estudiantes.edit',$row->id)}}" class="btn btn-success btn-sm">
                                    Editar
                                </a></div>
                                
                                
                            </div>


                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
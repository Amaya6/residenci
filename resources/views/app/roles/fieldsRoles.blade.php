<div class="row">
    <div class="col-lg-6">

        <div class="form-group">
            <label for="exampleInputEmail1">Actividad</label>
            {!! Form::text('actividad',null,$attributes=['class' => 'form-control']) !!}

            @includeWhen(count($errors->get('actividad'))>0, 'errors.message', ['errores' => $errors->get('actividad')])

        </div>
       
        <div class="form-group">
            <label for="exampleInputEmail1">Fecha</label>
            {!! Form::date('fecha',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('fecha'))>0, 'errors.message', ['errores' => $errors->get('fecha')])
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Estudiante</label>
           <div>
            @if ($model)
            <select-combustibles :selected="{{ $model->Estudiante}}" url="/api-app/estudiantes" nombre="estudiante_id" label="estudiante" />
            @else
            <select-combustibles url="/api-app/estudiantes" nombre="estudiante_id" label="estudiante" />
            @endif
           </div>
            @includeWhen(count($errors->get('estudiante_id'))>0, 'errors.message', ['errores' => $errors->get('estudiante_id')])
        </div>


    </div>
  
    <div class="col-lg-6">

       

        <div class="form-group">
            <label for="exampleInputEmail1">Area</label>
           <div>
            @if ($model)
            <select-combustibles :selected="{{ $model->area}}" url="/api-app/areas" nombre="area_id" label="area" />
            @else
            <select-combustibles url="/api-app/areas" nombre="area_id" label="area" />
            @endif
           </div>
            @includeWhen(count($errors->get('area_id'))>0, 'errors.message', ['errores' => $errors->get('area_id')])
        </div>

       
    </div>


 
</div>

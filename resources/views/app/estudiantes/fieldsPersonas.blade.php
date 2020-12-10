<div class="row">
    <div class="col-lg-6">

        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            {!! Form::text('nombres',null,$attributes=['class' => 'form-control']) !!}

            @includeWhen(count($errors->get('nombres'))>0, 'errors.message', ['errores' => $errors->get('nombres')])

        </div>
       
        <div class="form-group">
            <label for="exampleInputEmail1">Fecha Nacimiento</label>
            {!! Form::date('fecha_nacimiento',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('fecha_nacimiento'))>0, 'errors.message', ['errores' => $errors->get('fecha_nacimiento')])
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Etnia</label>
           <div>
            @if ($model)
            <select-combustibles :selected="{{ $model->etnia}}" url="/api-app/etnias" nombre="etnia_id" label="etnia" />
            @else
            <select-combustibles url="/api-app/etnias" nombre="etnia_id" label="etnia" />
            @endif
           </div>
            @includeWhen(count($errors->get('etnia_id'))>0, 'errors.message', ['errores' => $errors->get('etnia_id')])
        </div>


    </div>
  
    <div class="col-lg-6">

        <div class="form-group">
            <label for="exampleInputEmail1">Apellidos</label>
            {!! Form::text('apellidos',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('apellidos'))>0, 'errors.message', ['errores' => $errors->get('apellidos')])
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Celular</label>
            {!! Form::text('celular',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('celular'))>0, 'errors.message', ['errores' => $errors->get('celular')])
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Sexo</label>
           <div>
            @if ($model)
            <select-combustibles :selected="{{ $model->sexo}}" url="/api-app/sexos" nombre="sexo_id" label="sexo" />
            @else
            <select-combustibles url="/api-app/sexos" nombre="sexo_id" label="sexo" />
            @endif
           </div>
            @includeWhen(count($errors->get('sexo_id'))>0, 'errors.message', ['errores' => $errors->get('sexo_id')])
        </div>

       
    </div>


    <div class="col-lg-12">
        <div class="form-group">
            <label for="exampleInputEmail1">Dirección</label>
            {!! Form::text('direccion',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('direccion'))>0, 'errors.message', ['errores' => $errors->get('direccion')])
        </div>
    </div>
</div>

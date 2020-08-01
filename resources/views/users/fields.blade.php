<!--  Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_user_id', 'Tipo de Usuario:') !!}
    {!! Form::select('type_user_id', $typeUsers, null, ['class' => 'form-control']) !!}
</div>

<!-- User Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre Usuario:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 150]) !!} 
    
</div>

<div class="form-group col-sm-6">
    {!! Form::label('email', 'Correo:') !!}
    {!! Form::text('email', null, ['class' => 'form-control','maxlength' => 150]) !!} 
</div>

<div class="form-group col-sm-6">
    {!! Form::label('password', 'Contraseña:') !!}
    {!! Form::password('password', null, ['class' => 'form-control','maxlength' => 150]) !!} 
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-default">Cancelar</a>
</div>

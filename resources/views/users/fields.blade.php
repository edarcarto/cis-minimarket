


<!-- User Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre Usuario:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 150]) !!} 
    
</div>
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre Usuario:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 150]) !!} 
    
</div>
<!--  Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'Usuario Padre:') !!}
    {!! Form::select('user_id', $userItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Parent Field -->
<div class="form-group col-sm-12">
    {!! Form::label('parent', 'Padre:') !!}
    <label class="radio-inline">
        {!! Form::radio('parent', "1", null) !!} Yes
    </label>

    <label class="radio-inline">
        {!! Form::radio('parent', "0", null) !!} No
    </label>

</div>

<!-- Active Field -->
<div class="form-group col-sm-6">
    {!! Form::label('active', 'Activo:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('active', 0) !!}
        {!! Form::checkbox('active', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-default">Cancelar</a>
</div>

<!-- Type Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_name', 'Nombre Tipo:') !!}
    {!! Form::text('type_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('userTypes.index') }}" class="btn btn-default">Cancelar</a>
</div>

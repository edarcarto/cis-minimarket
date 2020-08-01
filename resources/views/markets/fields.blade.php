<!-- Category Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('market_name', 'Nombre Tienda:') !!}
    {!! Form::text('market_name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('address', 'Dirección Tienda:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
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
    <a href="{{ route('markets.index') }}" class="btn btn-default">Cancelar</a>
</div>

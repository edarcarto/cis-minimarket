<!-- Trade Name Field -->
<div class="form-group">
    {!! Form::label('trade_name', 'Nombre de la Marca:') !!}
    <p>{{ $trademark->trade_name }}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Activo:') !!}
    <p>{{ $trademark->active }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creación') !!}
    <p>{{ $trademark->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualización') !!}
    <p>{{ $trademark->updated_at }}</p>
</div>


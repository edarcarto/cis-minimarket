<!-- market Name Field -->
<div class="form-group">
    {!! Form::label('market_name', 'Nombre Tienda:') !!}
    <p>{{ $market->market_name }}</p>
</div>

<div class="form-group">
    {!! Form::label('address', 'Dirección Tienda:') !!}
    <p>{{ $market->address }}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Activo:') !!}
    <p>{{ ($market->active === 1) ? 'Si' : 'No' }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $market->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{{ $market->updated_at }}</p>
</div>


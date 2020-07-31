<!-- Category Name Field -->
<div class="form-group">
    {!! Form::label('market_name', 'Nombre Tienda:') !!}
    <p>{{ $category->market_name }}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Activo:') !!}
    <p>{{ ($category->active === 1) ? 'Si' : 'No' }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $category->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{{ $category->updated_at }}</p>
</div>


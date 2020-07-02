<!-- Category Name Field -->
<div class="form-group">
    {!! Form::label('category_name', 'Nombre Categoría:') !!}
    <p>{{ $category->category_name }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Categoría Padre:') !!}
    <p>{{ $category->category_id }}</p>
</div>

<!-- Parent Field -->
<div class="form-group">
    {!! Form::label('parent', 'Padre:') !!}
    <p>{{ $category->parent }}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Activo:') !!}
    <p>{{ $category->active }}</p>
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


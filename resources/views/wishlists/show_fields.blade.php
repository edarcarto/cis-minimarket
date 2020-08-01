<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Usuarios:') !!}
    <p>{{ ($wishlist->user) ? $wishlist->user->name : '' }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('product_id', 'Producto:') !!}
    <p>{{ ($wishlist->product) ? $wishlist->product->product_name : '' }}</p>
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


<!-- Product Name Field -->
<div class="form-group">
    {!! Form::label('product_name', 'Nombre del Producto:') !!}
    <p>{{ $product->product_name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Descripción:') !!}
    <p>{{ $product->description }}</p>
</div>

<!-- Quantity Per Unit Field -->
<div class="form-group">
    {!! Form::label('quantity_per_unit', 'Cantidades por Unidad:') !!}
    <p>{{ $product->quantity_per_unit }}</p>
</div>

<!-- Unit Price Field -->
<div class="form-group">
    {!! Form::label('unit_price', 'Precio por Unidad:') !!}
    <p>{{ $product->unit_price }}</p>
</div>

<!-- Units In Stock Field -->
<div class="form-group">
    {!! Form::label('units_in_stock', 'Unidades en Stock:') !!}
    <p>{{ $product->units_in_stock }}</p>
</div>

<!-- Units On Order Field -->
<div class="form-group">
    {!! Form::label('units_on_order', 'Unidades en Pedido:') !!}
    <p>{{ $product->units_on_order }}</p>
</div>

<!-- Reorder Level Field -->
<div class="form-group">
    {!! Form::label('reorder_level', 'Punto de Pedido:') !!}
    <p>{{ $product->reorder_level }}</p>
</div>

<!-- Supplier Id Field -->
<div class="form-group">
    {!! Form::label('supplier_id', 'Proveedores:') !!}
    <p>{{ $product->supplier->company_name }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Categorias:') !!}
    <p>{{ $product->category->category_name }}</p>
</div>

<!-- Trademark Id Field -->
<div class="form-group">
    {!! Form::label('trademark_id', 'Marca:') !!}
    <p>{{ $product->trademark->trade_name }}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Activo:') !!}
    <p>{{ $product->active }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creación') !!}
    <p>{{ $product->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualización') !!}
    <p>{{ $product->updated_at }}</p>
</div>

<!-- Images -->
<div class="col-sm-12">
    @foreach($images as $i)
    <!-- <div class="card" style="width: 18rem;">
        <img src="{{ $i->url }}" class="card-img-top" alt="Imagen">
    </div> -->
    <img src="{{ $i->url }}" alt="Imagen" class="img-thumbnail col-sm-2">
    @endforeach()
</div>

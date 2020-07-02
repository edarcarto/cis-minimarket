<!-- Product Name Field -->
<div class="form-group">
    {!! Form::label('product_name', 'Product Name:') !!}
    <p>{{ $product->product_name }}</p>
</div>

<!-- Quantity Per Unit Field -->
<div class="form-group">
    {!! Form::label('quantity_per_unit', 'Quantity Per Unit:') !!}
    <p>{{ $product->quantity_per_unit }}</p>
</div>

<!-- Unit Price Field -->
<div class="form-group">
    {!! Form::label('unit_price', 'Unit Price:') !!}
    <p>{{ $product->unit_price }}</p>
</div>

<!-- Units In Stock Field -->
<div class="form-group">
    {!! Form::label('units_in_stock', 'Units In Stock:') !!}
    <p>{{ $product->units_in_stock }}</p>
</div>

<!-- Units On Order Field -->
<div class="form-group">
    {!! Form::label('units_on_order', 'Units On Order:') !!}
    <p>{{ $product->units_on_order }}</p>
</div>

<!-- Reorder Level Field -->
<div class="form-group">
    {!! Form::label('reorder_level', 'Reorder Level:') !!}
    <p>{{ $product->reorder_level }}</p>
</div>

<!-- Supplier Id Field -->
<div class="form-group">
    {!! Form::label('supplier_id', 'Supplier Id:') !!}
    <p>{{ $product->supplier_id }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{{ $product->category_id }}</p>
</div>

<!-- Trademark Id Field -->
<div class="form-group">
    {!! Form::label('trademark_id', 'Trademark Id:') !!}
    <p>{{ $product->trademark_id }}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Active:') !!}
    <p>{{ $product->active }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $product->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $product->updated_at }}</p>
</div>


<!-- Product Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_name', 'Nombre del Producto:') !!}
    {!! Form::text('product_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantity Per Unit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity_per_unit', 'Cantidades por unidad:') !!}
    {!! Form::number('quantity_per_unit', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantity Per Unit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unit_price', 'Precio por Unidad:') !!}
    {!! Form::text('unit_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Units In Stock Field -->
<div class="form-group col-sm-6">
    {!! Form::label('units_in_stock', 'Unidades en Stock:') !!}
    {!! Form::number('units_in_stock', null, ['class' => 'form-control']) !!}
</div>

<!-- Units On Order Field -->
<div class="form-group col-sm-6">
    {!! Form::label('units_on_order', 'Unidades en Pedido:') !!}
    {!! Form::number('units_on_order', null, ['class' => 'form-control']) !!}
</div>

<!-- Reorder Level Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reorder_level', 'Punto de Pedido:') !!}
    {!! Form::number('reorder_level', null, ['class' => 'form-control']) !!}
</div>

<!-- Supplier Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('supplier_id', 'Proveedor:') !!}
    {!! Form::select('supplier_id', $supplierItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Categoría:') !!}
    {!! Form::select('category_id', $categoryItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Trademark Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trademark_id', 'Marca:') !!}
    {!! Form::select('trademark_id', $trademarkItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Discontinued Field -->
<div class="form-group col-sm-12">
    {!! Form::label('discontinued', 'Discontinuado:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('discontinued', 0) !!}
        {!! Form::checkbox('discontinued', '1', null) !!}
    </label>
</div>

<!-- Active Field -->
<div class="form-group col-sm-12">
    {!! Form::label('active', 'Activo:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('active', 0) !!}
        {!! Form::checkbox('active', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('products.index') }}" class="btn btn-default">Cancelar</a>
</div>

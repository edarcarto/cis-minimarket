<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
            <tr>
                <th>Nombre del Producto</th>
                <th>Cantidad por Unidad</th>
                <th>Precio por Unidad</th>
                <th>Unidades en Existencia</th>
                <th>Unidades en Pedido</th>
                <th>Punto de Pedido</th>
                <th>Proveedor</th>
                <th>Categoría</th>
                <th>Marca</th>
                <th>Descontinuado</th>
                <th>Activo</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->quantity_per_unit }}</td>
                <td>{{ $product->unit_price }}</td>
                <td>{{ $product->units_in_stock }}</td>
                <td>{{ $product->units_on_order }}</td>
                <td>{{ $product->reorder_level }}</td>
                <td>{{ $product->supplier->company_name }}</td>
                <td>{{ $product->category->category_name }}</td>
                <td>{{ $product->trademark->trade_name }}</td>
                <td>{{ ($product->descontinued) ? 'Si' : 'No' }}</td>
                <td>{{ ($product->active) ? 'Si' : 'No' }}</td>
                <td>
                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('products.show', [$product->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('products.edit', [$product->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

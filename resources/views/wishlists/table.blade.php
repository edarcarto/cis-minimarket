<div class="table-responsive">
    <table class="table" id="categories-table">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Producto</th>
                <th>Activo</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($wishlists as $wishlist)
            <tr>
                {{$wishlist->productImages}}
            <td><img src="{{ $wishlist->product_id }}" style="width:50px;height:50px;" /></td>
            <td>{{ $wishlist->product->produc_name }}</td>
                <td>
                    {!! Form::open(['route' => ['wishlists.destroy', $wishlist->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('product', [$wishlist->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

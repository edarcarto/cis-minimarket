<div class="table-responsive">
    <table class="table" id="shippers-table">
        <thead>
            <tr>
                <th>Tienda</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th>Fecha</th>
                <th>Tipo</th>
                <th>Estatus</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($shippers as $shipper)
            <tr>
            <td>{{ ($shipper->market) ? $shipper->market->market_name : '' }}</td>
            <td>{{ $shipper->address }}</td>
            <td>{{ $shipper->phone }}</td>
            <td>{{ $shipper->date_order }}</td>
            <td>{{ $shipper->type }}</td>
            <td>{{ ($shipper->status === 1) ? 'Si' : 'No' }}</td>
                <td>
                    {!! Form::open(['route' => ['shippers.destroy', $shipper->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('shippers.show', [$shipper->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('shippers.edit', [$shipper->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

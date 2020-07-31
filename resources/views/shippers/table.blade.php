<div class="table-responsive">
    <table class="table" id="shippers-table">
        <thead>
            <tr>
                <th>Orden</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th>Estatus</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($shippers as $shipper)
            <tr>
            <td></td>
            <td>{{ $shipper->address }}</td>
            <td>{{ $shipper->phone }}</td>
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

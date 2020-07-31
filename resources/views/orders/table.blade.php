<div class="table-responsive">
    <table class="table" id="orders-table">
        <thead>
            <tr>
                <th>Cliente</th>
        <th>Fecha Orden</th>
        <th>Fecha Envío</th>
        <th>Fecha de Recepción</th>
        <th>Envio</th>
        <th>Carga</th>
        <th>Nombre Receptor</th>
        <th>Dirección</th>
        <th>Ciudad Receptor</th>
        <th>Región Receptor</th>
        <th>Codigo Postal Receptor</th>
        <th>Pais Receptor</th>
        <th>Activo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->customer_id }}</td>
            <td>{{ $order->order_date }}</td>
            <td>{{ $order->required_date }}</td>
            <td>{{ $order->shipped_date }}</td>
            <td>{{ $order->ship_via }}</td>
            <td>{{ $order->freight }}</td>
            <td>{{ $order->ship_name }}</td>
            <td>{{ $order->ship_address }}</td>
            <td>{{ $order->ship_city }}</td>
            <td>{{ $order->ship_region }}</td>
            <td>{{ $order->ship_postal_code }}</td>
            <td>{{ $order->ship_country }}</td>
            <td>{{ ($order->active === 1) ? 'Si' : 'No' }}</td>
                <td>
                    {!! Form::open(['route' => ['orders.destroy', $order->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('orders.show', [$order->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('orders.edit', [$order->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

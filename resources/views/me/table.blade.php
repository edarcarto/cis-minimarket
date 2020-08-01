<div class="table-responsive">
    <!-- <table class="table" id="orders-table">
        <thead>
            <tr>
                <th>Customer Id</th>
                <th>Order Date</th>
                <th>Required Date</th>
                <th>Shipped Date</th>
                <th>Ship Via</th>
                <th>Freight</th>
                <th>Ship Name</th>
                <th>Ship Address</th>
                <th>Ship City</th>
                <th>Ship Region</th>
                <th>Ship Postal Code</th>
                <th>Ship Country</th>
                <th>Active</th>
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
            <td>{{ $order->active }}</td>
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
    </table> -->
    <div class="accordion" id="accordionExample">
        @foreach($orders as $order)
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$order->id}}" aria-expanded="true" aria-controls="collapse">
                        Orden N# {{$order->id}} {{$order->created_at}} <a href="#" style="float:right;">Cancelar</a>
                    </button>
                </h5>
            </div>
            <div id="collapse{{$order->id}}" class="collapse show" aria-labelledby="heading{{$order->id}}" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="list-group">
                        @foreach($order->details as $p)
                            <a href="#" class="list-group-item">{{$p->product->quantity}} {{$p->product->product_name}} {{$p->product->unit_price * $p->product->quantity}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

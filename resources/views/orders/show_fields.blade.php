<!-- Customer Id Field -->
<div class="form-group">
    {!! Form::label('customer_id', 'Cliente:') !!}
    <p>{{ $order->customer_id }}</p>
</div>

<!-- Order Date Field -->
<div class="form-group">
    {!! Form::label('order_date', 'Fecha de orden:') !!}
    <p>{{ $order->order_date }}</p>
</div>

<!-- Required Date Field -->
<div class="form-group">
    {!! Form::label('required_date', 'Fecha recepción:') !!}
    <p>{{ $order->required_date }}</p>
</div>

<!-- Shipped Date Field -->
<div class="form-group">
    {!! Form::label('shipped_date', 'Fecha Envio:') !!}
    <p>{{ $order->shipped_date }}</p>
</div>

<!-- Ship Via Field -->
<div class="form-group">
    {!! Form::label('ship_via', 'Envío:') !!}
    <p>{{ $order->shipper->address }}</p>
</div>

<!-- Freight Field -->
<div class="form-group">
    {!! Form::label('freight', 'Carga:') !!}
    <p>{{ $order->freight }}</p>
</div>

<!-- Ship Name Field -->
<div class="form-group">
    {!! Form::label('ship_name', 'Nombre de Receptor:') !!}
    <p>{{ $order->ship_name }}</p>
</div>

<!-- Ship Address Field -->
<div class="form-group">
    {!! Form::label('ship_address', 'Dirección Receptor:') !!}
    <p>{{ $order->ship_address }}</p>
</div>

<!-- Ship City Field -->
<div class="form-group">
    {!! Form::label('ship_city', 'Departamento Receptor:') !!}
    <p>{{ $order->ship_city }}</p>
</div>

<!-- Ship Region Field -->
<div class="form-group">
    {!! Form::label('ship_region', 'Provincia receptor:') !!}
    <p>{{ $order->ship_region }}</p>
</div>

<!-- Ship Postal Code Field -->
<div class="form-group">
    {!! Form::label('ship_postal_code', 'Distrito Receptor:') !!}
    <p>{{ $order->ship_postal_code }}</p>
</div>

<!-- Ship Country Field -->
<!-- <div class="form-group">
    {!! Form::label('ship_country', 'Pais Receptor:') !!}
    <p>{{ $order->ship_country }}</p>
</div> -->

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Activo:') !!}
    <p>{{ $order->active }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creación') !!}
    <p>{{ $order->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualización') !!}
    <p>{{ $order->updated_at }}</p>
</div>

<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orderDetails  as $od)
            <tr>
            <th scope="row">{{$od->product->product_name}}</th>
            <td>{{round($od->unit_price,2)}}</td>
            <td>{{$od->quantity}}</td>
            <td>{{$od->quantity * $od->unit_price}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
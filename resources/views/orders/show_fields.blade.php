<!-- Customer Id Field -->
<div class="form-group">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{{ $order->customer_id }}</p>
</div>

<!-- Order Date Field -->
<div class="form-group">
    {!! Form::label('order_date', 'Order Date:') !!}
    <p>{{ $order->order_date }}</p>
</div>

<!-- Required Date Field -->
<div class="form-group">
    {!! Form::label('required_date', 'Required Date:') !!}
    <p>{{ $order->required_date }}</p>
</div>

<!-- Shipped Date Field -->
<div class="form-group">
    {!! Form::label('shipped_date', 'Shipped Date:') !!}
    <p>{{ $order->shipped_date }}</p>
</div>

<!-- Ship Via Field -->
<div class="form-group">
    {!! Form::label('ship_via', 'Ship Via:') !!}
    <p>{{ $order->ship_via }}</p>
</div>

<!-- Freight Field -->
<div class="form-group">
    {!! Form::label('freight', 'Freight:') !!}
    <p>{{ $order->freight }}</p>
</div>

<!-- Ship Name Field -->
<div class="form-group">
    {!! Form::label('ship_name', 'Ship Name:') !!}
    <p>{{ $order->ship_name }}</p>
</div>

<!-- Ship Address Field -->
<div class="form-group">
    {!! Form::label('ship_address', 'Ship Address:') !!}
    <p>{{ $order->ship_address }}</p>
</div>

<!-- Ship City Field -->
<div class="form-group">
    {!! Form::label('ship_city', 'Ship City:') !!}
    <p>{{ $order->ship_city }}</p>
</div>

<!-- Ship Region Field -->
<div class="form-group">
    {!! Form::label('ship_region', 'Ship Region:') !!}
    <p>{{ $order->ship_region }}</p>
</div>

<!-- Ship Postal Code Field -->
<div class="form-group">
    {!! Form::label('ship_postal_code', 'Ship Postal Code:') !!}
    <p>{{ $order->ship_postal_code }}</p>
</div>

<!-- Ship Country Field -->
<div class="form-group">
    {!! Form::label('ship_country', 'Ship Country:') !!}
    <p>{{ $order->ship_country }}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Active:') !!}
    <p>{{ $order->active }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $order->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $order->updated_at }}</p>
</div>


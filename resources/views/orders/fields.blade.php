<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    {!! Form::select('customer_id', $customerItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Order Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order_date', 'Order Date:') !!}
    {!! Form::text('order_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Required Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('required_date', 'Required Date:') !!}
    {!! Form::text('required_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Shipped Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shipped_date', 'Shipped Date:') !!}
    {!! Form::text('shipped_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Ship Via Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ship_via', 'Ship Via:') !!}
    {!! Form::text('ship_via', null, ['class' => 'form-control']) !!}
</div>

<!-- Freight Field -->
<div class="form-group col-sm-6">
    {!! Form::label('freight', 'Freight:') !!}
    {!! Form::text('freight', null, ['class' => 'form-control']) !!}
</div>

<!-- Ship Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ship_name', 'Ship Name:') !!}
    {!! Form::text('ship_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Ship Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ship_address', 'Ship Address:') !!}
    {!! Form::text('ship_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Ship City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ship_city', 'Ship City:') !!}
    {!! Form::text('ship_city', null, ['class' => 'form-control']) !!}
</div>

<!-- Ship Region Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ship_region', 'Ship Region:') !!}
    {!! Form::text('ship_region', null, ['class' => 'form-control']) !!}
</div>

<!-- Ship Postal Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ship_postal_code', 'Ship Postal Code:') !!}
    {!! Form::text('ship_postal_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Ship Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ship_country', 'Ship Country:') !!}
    {!! Form::text('ship_country', null, ['class' => 'form-control']) !!}
</div>

<!-- Active Field -->
<div class="form-group col-sm-6">
    {!! Form::label('active', 'Active:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('active', 0) !!}
        {!! Form::checkbox('active', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('orders.index') }}" class="btn btn-default">Cancelar</a>
</div>

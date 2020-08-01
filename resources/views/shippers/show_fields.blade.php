<div class="form-group ">
    {!! Form::label('market_id', 'Tienda:') !!}
    <p>{{ $shipper->market->market_name}}
</div>


<div class="form-group">
    {!! Form::label('address', 'Tipo:') !!}
    <p>{{ $shipper->document }}</p>
</div>

<div class="form-group">
    {!! Form::label('address', 'Documento:') !!}
    <p>{{ $shipper->document }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Dirección:') !!}
    <p>{{ $shipper->address }}</p>
</div>

<!-- phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Telefono:') !!}
    <p>{{ $shipper->phone }}</p>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('delivery_date', 'Fecha Delivery:') !!}
    {{{ $shipper->delivery_date }}}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('cancellation_date', 'Fecha Delivery:') !!}
    {{{ $shipper->cancellation_date }}}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('date_order', 'Fecha Orden:') !!}
    {{{ $shipper->date_order }}}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('date_order', 'Fecha Orden:') !!}
    {{{ $shipper->date_order }}}
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Estado:') !!}
    <p>{{ $shipper->status }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creación') !!}
    <p>{{ $shipper->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualización') !!}
    <p>{{ $shipper->updated_at }}</p>
</div>


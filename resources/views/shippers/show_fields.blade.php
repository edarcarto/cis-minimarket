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


<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $shipper->address }}</p>
</div>

<!-- [A[Bphone Field -->
<div class="form-group">
    {!! Form::label('[A[Bphone', '[A[Bphone:') !!}
    <p>{{ $shipper->[A[Bphone }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $shipper->status }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $shipper->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $shipper->updated_at }}</p>
</div>


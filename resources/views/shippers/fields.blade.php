<div class="form-group col-sm-6">
    {!! Form::label('market_id', 'Tienda:') !!}
    {!! Form::select('market_id', $marketItems,null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Dirección:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Teléfono:') !!}
    {!! Form::number('phone', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('delivery_date', 'Fecha Delivery:') !!}
    {!! Form::date('delivery_date', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('cancellation_date', 'Fecha Cancelación:') !!}
    {!! Form::date('cancellation_date', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('date_order', 'Fecha Orden:') !!}
    {!! Form::date('date_order', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('document', 'Documento:') !!}
    {!! Form::number('document', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('fullname', 'Nombre Completo:') !!}
    {!! Form::text('fullname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('type', 'Tipo:') !!}
    {!! Form::select('type', ['Presencial' => 'Presencial', 'Delivery' => 'Delivery'],null, ['class' => 'form-control']) !!}
</div>
<!-- Active Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Estado:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('shippers.index') }}" class="btn btn-default">Cancelar</a>
</div>

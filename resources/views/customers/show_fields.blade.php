<!-- First Name Field -->
<div class="form-group">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{{ $customer->first_name }}</p>
</div>

<!-- Last Name Field -->
<div class="form-group">
    {!! Form::label('last_name', 'Last Name:') !!}
    <p>{{ $customer->last_name }}</p>
</div>

<!-- Document Type Field -->
<div class="form-group">
    {!! Form::label('document_type', 'Document Type:') !!}
    <p>{{ $customer->document_type }}</p>
</div>

<!-- Document Number Field -->
<div class="form-group">
    {!! Form::label('document_number', 'Document Number:') !!}
    <p>{{ $customer->document_number }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $customer->phone }}</p>
</div>

<!-- Departament Field -->
<div class="form-group">
    {!! Form::label('departament', 'Departament:') !!}
    <p>{{ $customer->departament }}</p>
</div>

<!-- Province Field -->
<div class="form-group">
    {!! Form::label('province', 'Province:') !!}
    <p>{{ $customer->province }}</p>
</div>

<!-- District Field -->
<div class="form-group">
    {!! Form::label('district', 'District:') !!}
    <p>{{ $customer->district }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $customer->address }}</p>
</div>

<!-- Number Field -->
<div class="form-group">
    {!! Form::label('number', 'Number:') !!}
    <p>{{ $customer->number }}</p>
</div>

<!-- Legal Field -->
<div class="form-group">
    {!! Form::label('legal', 'Legal:') !!}
    <p>{{ $customer->legal }}</p>
</div>

<!-- Tyc Field -->
<div class="form-group">
    {!! Form::label('tyc', 'Tyc:') !!}
    <p>{{ $customer->tyc }}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Active:') !!}
    <p>{{ $customer->active }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $customer->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $customer->updated_at }}</p>
</div>


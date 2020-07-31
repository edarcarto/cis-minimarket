<!-- First Name Field -->
<div class="form-group">
    {!! Form::label('first_name', 'Nombres:') !!}
    <p>{{ $customer->first_name }}</p>
</div>

<!-- Last Name Field -->
<div class="form-group">
    {!! Form::label('last_name', 'Apellidos:') !!}
    <p>{{ $customer->last_name }}</p>
</div>

<!-- Document Type Field -->
<div class="form-group">
    {!! Form::label('document_type', 'T. Documento:') !!}
    <p>@if($customer->document_type == 1)
        CE
    @elseif($customer->document_type == 2)
        DNI
    @elseif($customer->document_type == 3)
        RUC
    @endif</p>
</div>

<!-- Document Number Field -->
<div class="form-group">
    {!! Form::label('document_number', 'Numero de documento:') !!}
    <p>{{ $customer->document_number }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Teléfono:') !!}
    <p>{{ $customer->phone }}</p>
</div>

<!-- Departament Field -->
<div class="form-group">
    {!! Form::label('departament', 'Departamento:') !!}
    <p>{{ $customer->departament }}</p>
</div>

<!-- Province Field -->
<div class="form-group">
    {!! Form::label('province', 'Provincia:') !!}
    <p>{{ $customer->province }}</p>
</div>

<!-- District Field -->
<div class="form-group">
    {!! Form::label('district', 'Distrito:') !!}
    <p>{{ $customer->district }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Dirección:') !!}
    <p>{{ $customer->address }}</p>
</div>

<!-- Number Field -->
<div class="form-group">
    {!! Form::label('number', 'Numero:') !!}
    <p>{{ $customer->number }}</p>
</div>

<!-- Legal Field -->
<div class="form-group">
    {!! Form::label('legal', 'Legal:') !!}
    <p>{{ ($customer->legal === 1) ? 'Si' : 'No' }}</p>
</div>

<!-- Tyc Field -->
<div class="form-group">
    {!! Form::label('tyc', 'Terminos y condiciones:') !!} 
    <p>{{ ($customer->tyc === 1) ? 'Si' : 'No' }}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Active:') !!}
    <p>{{ $customer->active }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creación') !!}
    <p>{{ $customer->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualización') !!}
    <p>{{ $customer->updated_at }}</p>
</div>


<!-- Company Name Field -->
<div class="form-group">
    {!! Form::label('company_name', 'Nombre de Compañia:') !!}
    <p>{{ $supplier->company_name }}</p>
</div>

<!-- Contact Name Field -->
<div class="form-group">
    {!! Form::label('contact_name', 'Nombre del Contacto:') !!}
    <p>{{ $supplier->contact_name }}</p>
</div>

<!-- Contact Title Field -->
<div class="form-group">
    {!! Form::label('contact_title', 'Puesto:') !!}
    <p>{{ $supplier->contact_title }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Dirección:') !!}
    <p>{{ $supplier->address }}</p>
</div>

<!-- City Field -->
<div class="form-group">
    {!! Form::label('city', 'Ciudad:') !!}
    <p>{{ $supplier->city }}</p>
</div>

<!-- Region Field -->
<div class="form-group">
    {!! Form::label('region', 'Región:') !!}
    <p>{{ $supplier->region }}</p>
</div>

<!-- Postal Code Field -->
<div class="form-group">
    {!! Form::label('postal_code', 'Codigo Postal:') !!}
    <p>{{ $supplier->postal_code }}</p>
</div>

<!-- Country Field -->
<!-- <div class="form-group">
    @{!! Form::label('country', 'Pais:') !!}
    <p>@{{ $supplier->country }}</p>
</div> -->

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Teléfono:') !!}
    <p>{{ $supplier->phone }}</p>
</div>

<!-- Fax Field -->
<!-- <div class="form-group">
    @{!! Form::label('fax', 'Fax:') !!}
    <p>@{{ $supplier->fax }}</p>
</div> -->

<!-- Homepage Field -->
<div class="form-group">
    {!! Form::label('homepage', 'Pagina Web:') !!}
    <p>{{ $supplier->homepage }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creación') !!}
    <p>{{ $supplier->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualización') !!}
    <p>{{ $supplier->updated_at }}</p>
</div>


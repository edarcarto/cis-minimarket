<!-- Company Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_name', 'Nombre de Compañia:') !!}
    {!! Form::text('company_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Contact Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contact_name', 'Nombre del Contacto:') !!}
    {!! Form::text('contact_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Contact Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contact_title', 'Puesto:') !!}
    {!! Form::text('contact_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Dirección:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'Ciudad:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<!-- Region Field -->
<div class="form-group col-sm-6">
    {!! Form::label('region', 'Región:') !!}
    {!! Form::text('region', null, ['class' => 'form-control']) !!}
</div>

<!-- Postal Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('postal_code', 'Codigo Postal:') !!}
    {!! Form::text('postal_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Pais:') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Teléfono:') !!}
    {!! Form::tel('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax', 'Fax:') !!}
    {!! Form::tel('fax', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Homepage -->
<div class="form-group col-sm-6">
    {!! Form::label('homepage', 'Pagina Web:') !!}
    {!! Form::url('homepage', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('suppliers.index') }}" class="btn btn-default">Cancelar</a>
</div>

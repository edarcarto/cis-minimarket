<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Document Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('document_type', 'Document Type:') !!}
    {!! Form::select('document_type', ['1' => 'CE', '2' => 'DNI', '3' => 'RUC'], null, ['class' => 'form-control']) !!}
</div>

<!-- Document Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('document_number', 'Document Number:') !!}
    {!! Form::text('document_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Departament Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departament', 'Departament:') !!}
    {!! Form::select('departament', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Province Field -->
<div class="form-group col-sm-6">
    {!! Form::label('province', 'Province:') !!}
    {!! Form::select('province', ], null, ['class' => 'form-control']) !!}
</div>

<!-- District Field -->
<div class="form-group col-sm-6">
    {!! Form::label('district', 'District:') !!}
    {!! Form::select('district', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number', 'Number:') !!}
    {!! Form::number('number', null, ['class' => 'form-control']) !!}
</div>

<!-- Legal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('legal', 'Legal:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('legal', 0) !!}
        {!! Form::checkbox('legal', '1', null) !!}
    </label>
</div>


<!-- Tyc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tyc', 'Tyc:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('tyc', 0) !!}
        {!! Form::checkbox('tyc', '1', null) !!}
    </label>
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
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('customers.index') }}" class="btn btn-default">Cancel</a>
</div>

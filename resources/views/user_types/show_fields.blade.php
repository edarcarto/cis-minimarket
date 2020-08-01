<!-- Type Name Field -->
<div class="form-group">
    {!! Form::label('type_name', 'Nombre del tipo:') !!}
    <p>{{ $userType->type_name }}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Activo:') !!}
    <p>{{ $userType->active }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creación') !!}
    <p>{{ $userType->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualización') !!}
    <p>{{ $userType->updated_at }}</p>
</div>


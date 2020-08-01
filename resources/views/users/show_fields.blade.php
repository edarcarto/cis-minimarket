<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('type_user_id', 'Tipo de usuario:') !!}
    <p>{{ ($user->user) ? $user->userType->type_name : '' }}</p>
</div>

<!-- User Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nombre Usuario:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Parent Field -->
<div class="form-group">
    {!! Form::label('email', 'Correo:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{{ $user->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{{ $user->updated_at }}</p>
</div>


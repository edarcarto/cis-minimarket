<!-- User Name Field -->
<div class="form-group">
    {!! Form::label('user_name', 'Nombre Usuario:') !!}
    <p>{{ $user->user_name }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Usuario Padre:') !!}
    <p>{{ ($user->user) ? $user->user->user_name : '' }}</p>
</div>

<!-- Parent Field -->
<div class="form-group">
    {!! Form::label('parent', 'Padre:') !!}
    <p>{{ ($user->parent === 1) ? 'Si' : 'No' }}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Activo:') !!}
    <p>{{ ($user->active === 1) ? 'Si' : 'No' }}</p>
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


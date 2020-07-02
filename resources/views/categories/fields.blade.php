<!-- Category Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_name', 'Nombre Categoría:') !!}
    {!! Form::text('category_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Categoría Pader:') !!}
    {!! Form::select('category_id', $categoryItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Parent Field -->
<div class="form-group col-sm-12">
    {!! Form::label('parent', 'Padre:') !!}
    <label class="radio-inline">
        {!! Form::radio('parent', "1", null) !!} Yes
    </label>

    <label class="radio-inline">
        {!! Form::radio('parent', "0", null) !!} No
    </label>

</div>

<!-- Active Field -->
<div class="form-group col-sm-6">
    {!! Form::label('active', 'Activo:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('active', 0) !!}
        {!! Form::checkbox('active', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('categories.index') }}" class="btn btn-default">Cancel</a>
</div>

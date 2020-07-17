<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- [A[Bphone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('[A[Bphone', '[A[Bphone:') !!}
    {!! Form::text('[A[Bphone', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('shippers.index') }}" class="btn btn-default">Cancel</a>
</div>

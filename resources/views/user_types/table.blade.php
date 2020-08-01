<div class="table-responsive">
    <table class="table" id="userTypes-table">
        <thead>
            <tr>
                <th>Nombre del Tipo</th>
                <th>Active</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($userTypes as $userType)
            <tr>
                <td>{{ $userType->type_name }}</td>
            <td>{{ $userType->active }}</td>
                <td>
                    {!! Form::open(['route' => ['userTypes.destroy', $userType->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('userTypes.show', [$userType->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('userTypes.edit', [$userType->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

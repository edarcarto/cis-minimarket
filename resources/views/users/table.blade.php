<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Nombre Usuario</th>
                <th>Usuario</th>
                <th>Padre</th>
                <th>Activo</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
            <td>{{ $user->user_name }}</td>
            <td>{{ ($user->user) ? $user->user->user_name : '' }}</td>
            <td>{{ ($user->parent === 1) ? 'Si' : 'No' }}</td>
            <td>{{ ($user->active === 1) ? 'Si' : 'No' }}</td>
                <td>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$user->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="table-responsive">
    <table class="table" id="trademarks-table">
        <thead>
            <tr>
                <th>Nombre de la Marca</th>
                <th>Activo</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($trademarks as $trademark)
            <tr>
                <td>{{ $trademark->trade_name }}</td>
            <td>{{ ($trademark->active === 1) ? 'Si' : 'No' }}</td>
                <td>
                    {!! Form::open(['route' => ['trademarks.destroy', $trademark->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('trademarks.show', [$trademark->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('trademarks.edit', [$trademark->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

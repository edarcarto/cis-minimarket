<div class="table-responsive">
    <table class="table" id="markets-table">
        <thead>
            <tr>
                <th>Nombre Tienda</th>
                <th>Activo</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($markets as $market)
            <tr>
            <td>{{ $market->market_name }}</td>
            <td>{{ ($market->active === 1) ? 'Si' : 'No' }}</td>
                <td>
                    {!! Form::open(['route' => ['markets.destroy', $market->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('markets.show', [$market->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('markets.edit', [$market->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

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
        @foreach($markets as $category)
            <tr>
            <td>{{ $category->category_name }}</td>
            <td>{{ ($category->active === 1) ? 'Si' : 'No' }}</td>
                <td>
                    {!! Form::open(['route' => ['markets.destroy', $category->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('markets.show', [$category->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('markets.edit', [$category->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

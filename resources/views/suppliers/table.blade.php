<div class="table-responsive">
    <table class="table" id="suppliers-table">
        <thead>
            <tr>
                <th>Nombre de Compañia</th>
                <th>Nombre del Contacto</th>
                <th>Puesto</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>Región</th>
                <th>Código Postal</th>
                <!-- <th>País</th> -->
                <th>Teléfono</th>
                <!-- <th>Fax</th> -->
                <th>Pagina Web</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($suppliers as $supplier)
            <tr>
                <td>{{ $supplier->company_name }}</td>
            <td>{{ $supplier->contact_name }}</td>
            <td>{{ $supplier->contact_title }}</td>
            <td>{{ $supplier->address }}</td>
            <td>{{ $supplier->city }}</td>
            <td>{{ $supplier->region }}</td>
            <td>{{ $supplier->postal_code }}</td>
            <!-- <td>@{{ $supplier->country }}</td> -->
            <td>{{ $supplier->phone }}</td>
            <!-- <td>@{{ $supplier->fax }}</td> -->
            <td>{{ $supplier->homepage }}</td>
                <td>
                    {!! Form::open(['route' => ['suppliers.destroy', $supplier->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('suppliers.show', [$supplier->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('suppliers.edit', [$supplier->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

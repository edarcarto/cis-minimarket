<div class="table-responsive">
    <table class="table" id="customers-table">
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>T. Documento</th>
                <th>Numero Documento</th>
                <th>Teléfono</th>
                <!-- <th>Departament</th> -->
                <!-- <th>Province</th> -->
                <!-- <th>District</th> -->
                <th>Dirección</th>
                <!-- <th>Nro</th> -->
                <!-- <th>Legal</th> -->
                <!-- <th>Tyc</th> -->
                <th>Activo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->first_name }}</td>
                <td>{{ $customer->last_name }}</td>
                <td>{{ $customer->document_type }}</td>
                <td>{{ $customer->document_number }}</td>
                <td>{{ $customer->phone }}</td>
                <!-- <td>{{ $customer->departament }}</td> -->
                <!-- <td>{{ $customer->province }}</td> -->
                <!-- <td>{{ $customer->district }}</td> -->
                <td>{{ $customer->address }}</td>
                <!-- <td>{{ $customer->number }}</td> -->
                <!-- <td>{{ $customer->legal }}</td> -->
                <!-- <td>{{ $customer->tyc }}</td> -->
                <td>{{ ($customer->active === 1) ? 'Si' : 'No' }}</td>
                <td>
                    {!! Form::open(['route' => ['customers.destroy', $customer->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('customers.show', [$customer->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('customers.edit', [$customer->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Estado</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($vehicles as $vehicle)
        <tr>
            <td>{{$vehicle->name}}</td>
            <td>{{$vehicle->description}}</td>
            <td>
                @if ($vehicle->status =='activo')
                    <i class="fa fa-check text-success"></i>
                @else
                    <i class="fa fa-close text-warning"></i>
            @endif
            <td>
                @can('modificar item')
                    <a href="{{route('edit-vehicle',$vehicle->id)}}"
                       class="btn btn-default btn-xs"
                       data-toggle="tooltip"
                       data-original-title="Editar"
                       data-id-vehicle="{{$vehicle->id}}">
                        <i class="fa fa-pencil font-14"></i>
                    </a>
                @endcan
                @can('eliminar item')
                    <a class="btn btn-default btn-xs btn-delete-vehicle"
                       data-toggle="tooltip"
                       @if ($vehicle->status=="activo")
                       data-original-title="Deshabilitar"
                       @else
                       data-original-title="Habilitar"
                       @endif
                       data-id-vehicle="{{$vehicle->id}}">
                        @if ($vehicle->status=="activo")
                            <i class="fa fa-close font-14 text-danger"></i>
                        @else
                            <i class="fa fa-exchange font-14 text-success"></i>
                        @endif
                    </a>
                @endcan
            </td>
        </tr>
    @endforeach
    </tbody>
</table>


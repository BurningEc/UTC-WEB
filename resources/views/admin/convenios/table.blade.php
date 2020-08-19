<table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Convenio</th>
        <th>Representante Legal</th>
        <th>Inicio</th>
        <th>Finalización</th>
        <th>Estado</th>
        <th>...</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($convenios as $convenio)
        <tr>
            <td>{{$convenio->name}}</td>
            <td>{{$convenio->legal_representative}}</td>
            <td>{{$convenio->start}}</td>
            <td>{{$convenio->end}}</td>
            <td>
                @if ($convenio->status =='activo')
                    <i class="fa fa-check text-success"></i>
                @else
                    <i class="fa fa-close text-warning"></i>
            @endif
            <td>
                <a href="{{route('show-convenio',$convenio->id)}}"
                   data-toggle="tooltip"
                   data-original-title="Ver"
                   class="btn btn-default btn-xs">
                    <i class="fa fa-eye font-14 text-info"></i>
                </a>
                @can('modificar item')
                    <a href="{{route('edit-convenio',$convenio->id)}}"
                       class="btn btn-default btn-xs"
                       data-toggle="tooltip"
                       data-original-title="Editar"
                       data-id-convenio="{{$convenio->id}}">
                        <i class="fa fa-pencil font-14"></i>
                    </a>
                @endcan
                @can('eliminar item')
                    <a type="button"
                       data-id-convenio="{{$convenio->id}}"
                       data-toggle="tooltip"
                       data-original-title="Editar"
                       class="btn btn-default btn-xs btn-delete-convenio">
                        <i class="fa fa-trash font-14 text-danger"></i>
                    </a>
                @endcan

            </td>
        </tr>
    @endforeach
    </tbody>
</table>


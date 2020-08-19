<table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Foto</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Estado</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($companies as $company)
        <tr>
            <td><img width="40" height="40" src="{{$company->url_image}}" alt="" class="img-responsive"></td>

            <td>{{$company->name}}</td>
            <td>{{$company->description}}</td>
            <td>
                @if ($company->status =='activo')
                    <i class="fa fa-check text-success"></i>
                @else
                    <i class="fa fa-close text-warning"></i>
            @endif
            <td>
                @can('modificar item')
                    <a href="{{route('edit-company',$company->id)}}"
                       class="btn btn-default btn-xs"
                       data-toggle="tooltip"
                       data-original-title="Editar"
                       data-id-company="{{$company->id}}">
                        <i class="fa fa-pencil font-14"></i>
                    </a>
                @endcan
                @can('eliminar item')
                    <a class="btn btn-default btn-xs btn-delete-company"
                       data-toggle="tooltip"
                       @if ($company->status=="activo")
                       data-original-title="Deshabilitar"
                       @else
                       data-original-title="Habilitar"
                       @endif
                       data-id-company="{{$company->id}}">
                        @if ($company->status=="activo")
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


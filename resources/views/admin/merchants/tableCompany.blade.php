<table class="table table-striped table-bordered table-hover" >
    <thead>
        <tr>


            <th>RUC</th>
            <th>Empresa</th>

            <th>Actualizado</th>
            <th>Estado</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($merchant->companies as $company)
        <tr>
            <td>{{$company->company_ruc}}</td>
            <td>{{$company->company_name}}</td>
            <td>{{\Carbon\Carbon::parse($company->updated_at)->diffForhumans()}}</td>


            <td>
                @if ($company->status =='activo')
                    <i class="fa fa-check text-success"></i>
                @else
                    <i class="fa fa-close text-warning"></i>
                @endif
            <td>

                @can('modificar empresa')
                    <button  class="btn btn-default btn-xs btn-company-edit"
                            data-id-company={{$company->id}}
                            data-name-company="{{$company->company_name}}"
                            title="Ver petición"
                            data-toggle="tooltip">
                                <i class="fa fa-edit font-14 text-info"></i>
                    </button>
                @endcan
                @can('delete user')
                <button class="btn btn-default btn-xs btn-delete-company"
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

                </button>
            @endcan
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


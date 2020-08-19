<table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
    <thead>
    <tr>

        <th>CI</th>
        <th>RUC</th>
        <th>Nombres y Apellidos</th>
        <th>Email</th>
        <th>Télefono</th>
        <th>Empresa</th>

        <th>Enviado</th>
        <th>Estado</th>
        <th>Ver</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($request_merchants as $request_merchant)
        <tr>
            <td>{{$request_merchant->ci}}</td>
            <td>{{$request_merchant->company_ruc}}</td>
            <td>{{$request_merchant->last_name}} {{$request_merchant->name}}</td>
            <td>{{$request_merchant->email}}</td>
            <td>{{$request_merchant->phone}}</td>
            <td>{{$request_merchant->company_name}}</td>
            <td>{{\Carbon\Carbon::parse($request_merchant->created_at)->diffForhumans()}}</td>

            <td>
                @if ($request_merchant->status =="revision")
                    <span class="badge badge-primary badge-pill">{{$request_merchant->status}}</span>
                @endif
                @if ($request_merchant->status =="aprobado")
                    <span class="badge badge-success badge-pill">{{$request_merchant->status}}</span>
                @endif
                @if ($request_merchant->status =="denegado")
                    <span class="badge badge-danger badge-pill">{{$request_merchant->status}}</span>
            @endif
            <td>

                @can('leer solicitud')
                    @if ($request_merchant->status !="aprobado")
                        <a href="{{route('show-request-merchants',$request_merchant->id)}}"
                           class="btn btn-default btn-xs"
                           title="Ver petición"
                           data-toggle="tooltip">
                            <i class="fa fa-eye font-14 text-primary"></i>
                        </a>
                    @endif

                @endcan
            </td>
        </tr>
    @endforeach
    </tbody>
</table>


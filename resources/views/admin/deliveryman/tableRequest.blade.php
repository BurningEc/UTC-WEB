<table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
    <thead>
    <tr>

        <th>CI</th>

        <th>Nombres y Apellidos</th>
        <th>Email</th>
        <th>Télefono</th>
        <th>Placa</th>
        <th>Tipo</th>
        <th>Enviado</th>
        <th>Estado</th>
        <th>Ver</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($request_deliverymen as $request_delivery)
        <tr>
            <td>{{$request_delivery->ci}}</td>
            <td>{{$request_delivery->last_name}} {{$request_delivery->name}}</td>
            <td>{{$request_delivery->email}}</td>
            <td>{{$request_delivery->phone}}</td>
            <td>{{$request_delivery->vehicle_plate}}</td>
            <td>{{$request_delivery->vehicle_type}}</td>
            <td>{{\Carbon\Carbon::parse($request_delivery->created_at)->diffForhumans()}}</td>

            <td>
                @if ($request_delivery->status =="revision")
                    <span class="badge badge-primary badge-pill">{{$request_delivery->status}}</span>
                @endif
                @if ($request_delivery->status =="aprobado")
                    <span class="badge badge-success badge-pill">{{$request_delivery->status}}</span>
                @endif
                @if ($request_delivery->status =="denegado")
                    <span class="badge badge-danger badge-pill">{{$request_delivery->status}}</span>
            @endif
            <td>

                @can('modificar solicitud')
                    @if ($request_delivery->status !="aprobado")
                        <a href="{{route('show-request-delivery',$request_delivery->id)}}"
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


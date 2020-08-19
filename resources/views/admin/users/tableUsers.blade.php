<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Imagen</th>
            <th>Usuario</th>
            <th>Nombres</th>

            <th>Email</th>
            <th>Creado</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td><img width="40" height="40" src="{{$user->url_image}}" alt="" class="img-responsive"></td>
            <td>{{$user->username}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{\Carbon\Carbon::parse($user->created_at)->diffForhumans()}}</td>

            <td>
                @if ($user->status =='activo')
                    <i class="fa fa-check text-success"></i>
                @else
                    <i class="fa fa-close text-warning"></i>
                @endif
            <td>
                @can('modificar usuario')
                <a href="{{route('edit-user',$user->id)}}"
                    class="btn btn-default btn-xs"
                    data-toggle="tooltip"
                    data-original-title="Editar"
                    data-id-user="{{$user->id}}">
                    <i class="fa fa-pencil font-14"></i>
                </a>
                @endcan
                @can('eliminar usuario')
                    <a class="btn btn-default btn-xs btn-delete-user"
                    data-toggle="tooltip"
                    @if ($user->status=="activo")
                        data-original-title="Deshabilitar"
                    @else
                        data-original-title="Habilitar"
                    @endif
                    data-id-user="{{$user->id}}">
                        @if ($user->status=="activo")
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


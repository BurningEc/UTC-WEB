@foreach ($roles as $role)
    <li class="list-group-item border-top-0">
        <div class="d-flex align-items-center">
            <a
                    data-id-rol="{{$role->id}}"
                    class="text-secondary btn-role-selection"
                    href="">
                @if ($role->status=='activo')
                    <i class="f-20 m-r-10 fa fa-user text-success"></i>
                @else
                    <i class="f-20 m-r-10 fa fa-user text-danger"></i>
                @endif
                <span>{{$role->name}}</span>

            </a>
            @can('modificar usuario')
                <a data-toggle="tooltip"
                   title="Modificar permisos"
                   class="pl-2"
                   href="{{ route('edit-role',$role->id) }}">
                    <i class="f-12 m-r-10 fa fa-edit text-secondary"></i></a>
            @endcan
            @can('eliminar usuario')
                @if ($role->status=='activo')
                    <a
                            onclick="event.preventDefault()"
                            data-toggle="tooltip"
                            data-id-rol="{{$role->id}}"
                            title="Deshabilitar rol"
                            data-original-title="Deshabilitar rol"
                            class="btn-delete-role"
                            href="">
                        <i class="f-12 m-r-10 fa fa-trash text-secondary"></i></a>
                @else
                    <a
                            onclick="event.preventDefault()"
                            data-toggle="tooltip"
                            data-id-rol="{{$role->id}}"
                            title="Habilitar rol"
                            data-original-title="Habilitar rol"
                            class="btn-delete-role"
                            href="">
                        <i class="f-12 m-r-10 fa fa-exchange text-secondary"></i></a>
                @endif

            @endcan

        </div>
    </li>
@endforeach

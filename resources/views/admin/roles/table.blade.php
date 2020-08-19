
@if (count($permissions)>0)
<table id="report-table" class="table table-striped mb-0">
    <thead>
        <tr>
            <th>Módulo</th>
            <th>Permiso</th>
            <th>Descripción</th>
            <th>Modificado</th>
        </tr>
    </thead>
    <tbody>

        @foreach ( $permissions as $permission)
        <tr>
            <td>
                <div class="d-flex align-items-center">
                     <i class="f-16 m-r-10 fa fa-sitemap text-secondary"></i> {{$permission->modulo}}
                </div>
            </td>
            <td>
                <div>{{$permission->name}}</div>
            </td>
            <td>
                <div>{{$permission->description}}</div>
            </td>
            <td>
                <div>{{\Carbon\Carbon::parse($permission->updated_at)->diffForhumans()}}</div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<x-empty></x-empty>

@endif



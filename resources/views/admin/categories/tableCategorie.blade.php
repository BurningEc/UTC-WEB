
@if (count($categories)>0)



<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td><img width="40" height="40" src="{{$category->url_image}}" alt="" class="img-responsive"></td>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>
            <td>
                @if ($category->status =='activo')
                    <i class="fa fa-check text-success"></i>
                @else
                    <i class="fa fa-close text-warning"></i>
                @endif
            <td>
                @can('modificar categoria')
                    <a href="{{route('edit-category',$category->id)}}"
                                        class="btn btn-default btn-xs"
                                        data-toggle="tooltip"
                                        data-original-title="Editar"
                                        data-id-category="{{$category->id}}">
                                        <i class="fa fa-pencil font-14"></i>
                     </a>
                @endcan
                @can('eliminar categoria')
                    <a class="btn btn-default btn-xs btn-delete-category"
                        data-toggle="tooltip"
                        @if ($category->status=="activo")
                            data-original-title="Deshabilitar"
                        @else
                            data-original-title="Habilitar"
                        @endif
                        data-id-company="{{$category->company->id}}"
                        data-id-category="{{$category->id}}">
                        @if ($category->status=="activo")
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

@else
<div class="text-center">
    <img width="200" height="160" src="{{asset('assets/img/data.png')}}" alt="">
    <h6>No hay datos para mostrar</h6>
</div>

@endif

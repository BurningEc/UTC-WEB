<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Categoría</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subcategories as $subcategory)
        <tr>
            <td>{{$subcategory->name}}</td>
            <td>{{$subcategory->description}}</td>
            <td>{{$subcategory->category->name}}</td>

            <td>
                @if ($subcategory->status =='activo')
                    <i class="fa fa-check text-success"></i>
                @else
                    <i class="fa fa-close text-warning"></i>
                @endif
            <td>
                @can('update subcategory')
                <a href="{{route('edit-subcategory',$subcategory->id)}}"
                                        class="btn btn-default btn-xs"
                                        data-toggle="tooltip"
                                        data-original-title="Editar"
                                        data-id-category="{{$subcategory->id}}">
                                        <i class="fa fa-pencil font-14"></i>
                                    </a>
                @endcan

                @can('delete subcategory')
                <a class="btn btn-default btn-xs btn-delete-category"
                                        data-toggle="tooltip"
                                        @if ($subcategory->status=="activo")
                                            data-original-title="Deshabilitar"
                                        @else
                                            data-original-title="Habilitar"
                                        @endif
                                        data-id-category="{{$subcategory->id}}">
                                            @if ($subcategory->status=="activo")
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


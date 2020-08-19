@if(count($sliders)>0)
    @foreach($sliders as $slider)

        <div class="col-md-6">
            <div class="card mb-3">
                <img class="card-img-top" src="{{$slider->url_image}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$slider->title}}</h5>
                    <p class="card-text"><small>{{$slider->description}}</small></p>
                    <p class="card-text">
                        <small
                            class="text-muted">{{\Carbon\Carbon::parse($slider->updated_at)->diffForHumans()}}</small>
                        <a data-toggle="tooltip"
                           data-id-slider="{{$slider->id}}"
                           title="Eliminar Slider" class="pull-right text-muted ml-3 btn-delete-slider" ><i
                                class="fa  fa-trash"></i></a>
                        @if ($slider->status==='activo')
                            <a data-toggle="tooltip"
                               data-id-slider="{{$slider->id}}"
                               title="Ocultar Slider" class="pull-right text-muted ml-3 btn-change-slider"><i
                                    class="fa  fa-eye"></i></a>
                        @else
                            <a data-toggle="tooltip"
                               data-id-slider="{{$slider->id}}"
                               title="Habilitar Slider" class="pull-right text-muted ml-3 btn-change-slider"><i
                                    class="fa  fa-eye-slash"></i></a>
                        @endif

                        <a data-toggle="tooltip"
                           title="Modificar Slider" class="pull-right text-muted ml-2"
                           href="{{route('edit-web',$slider->id)}}"><i
                                class="fa  fa-edit"></i></a>


                    </p>
                </div>

            </div>
        </div>
    @endforeach
@endif

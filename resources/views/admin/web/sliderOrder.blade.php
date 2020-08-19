@extends('admin.base.index')

@section('content')

    <div class="col-lg-11">
        <div class="ibox">
            <div class="ibox-head bg-info">
                <div class="ibox-title text-white">Orden de visialización del slider</div>
                <div class="ibox-tools">
                    @can('crear producto')
                        <a class="text-white hover" href="{{route('web-index')}}">
                            <i class="fa fa-arrow-left"></i>
                            Regresar</a>
                    @endcan

                </div>
            </div>
            <div class="ibox-body">
                <ul id="simpleList" class="media-list media-list-divider m-0">
                    @foreach($sliders as $slider)
                        <li class="media" data-id="{{$slider->id}}">
                            <a class="media-img" href="javascript:;">
                                <img src="{{$slider->url_image}}" width="50px;"/>
                            </a>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="javascript:;">{{$slider->title}}</a>
                                    @if ($slider->status==='activo')
                                        <span class="font-16 float-right text-muted"><i class="fa fa-eye"></i></span>
                                    @else
                                        <span class="font-16 float-right text-muted"><i
                                                class="fa fa-eye-slash"></i></span>
                                    @endif

                                </div>
                                <div class="font-13">{{$slider->description}}</div>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>

@endsection



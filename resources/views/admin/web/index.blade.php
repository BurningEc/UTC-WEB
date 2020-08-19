@extends('admin.base.index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head bg-info">
                    <div class="ibox-title text-white">Sliders</div>
                    <div class="ibox-tools">
                        @can('crear producto')
                            <a class="text-white hover" href="{{route('create-web')}}">
                                <i class="fa fa-plus-square"></i>
                                Añadir</a>
                            <a class="text-white hover" href="{{route('order-slider')}}">
                                <i class="fa fa-list"></i>
                                Ordenar</a>
                        @endcan

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row table-sliders">
                @include('admin.web.table')
            </div>
        </div>

        <input hidden type="text" name="" id="url_image">


    </div>
@endsection

@include('admin.web.script')

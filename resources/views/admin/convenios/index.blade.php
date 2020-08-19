@extends('admin.base.index')

@section('content')
    <div class="row">


        @can('leer item')
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head badge-info">
                        <div class="ibox-title">Convenios</div>
                        <div class="ibox-tools">
                            <a class="text-white " href="{{route('create-convenios')}}">
                                <i class="fa fa-plus"></i>
                                Nuevo</a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-convenios table-responsive">
                            @include('admin.convenios.table')

                        </div>

                    </div>
                </div>
            </div>
        @endcan
    </div>
@endsection

@include('admin.convenios.script')

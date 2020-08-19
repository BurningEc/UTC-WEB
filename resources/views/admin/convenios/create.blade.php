@extends('admin.base.index')

@section('content')
    <div class="row">
        @can('crear item')
            <div class="col-md-10">
                <div class="ibox">
                    <div class="ibox-head bg-info">
                        <div class="ibox-title text-white">Nueva Convenio</div>
                        <div class="ibox-tools">
                            <a class="text-white " href="{{route('index-convenios')}}">
                                <i class="fa fa-arrow-left"></i>
                                Atras</a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        {!! Form::open(['url' => 'store-convenio','files' => true]) !!}
                        @include('admin.convenios.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        @endcan
    </div>
@endsection


@extends('admin.base.index')

@section('content')
    <div class="row">
        @can('crear item')
            <div class="col-md-4">
                <div class="ibox">
                    <div class="ibox-head bg-info">
                        <div class="ibox-title text-white">Nueva Tipo de vehículo</div>
                        <div class="ibox-tools">
                        </div>
                    </div>
                    <div class="ibox-body">
                        {!! Form::open(['url' => 'store-vehicle']) !!}
                        @include('admin.vehicletype.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        @endcan
        @can('leer item')
            <div class="col-md-8">
                <div class="ibox">
                    <div class="ibox-head badge-info">
                        <div class="ibox-title">Tipos de vehículos</div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-vehicle table-responsive">
                            @include('admin.vehicletype.table')

                        </div>

                    </div>
                </div>
            </div>
        @endcan
    </div>
@endsection

@include('admin.vehicletype.script')

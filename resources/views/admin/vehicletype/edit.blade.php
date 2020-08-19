@extends('admin.base.index')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="ibox">
            <div class="ibox-head bg-info">
                <div class="ibox-title text-white">Modificar Tipo de vehículo</div>
                <div class="ibox-tools">

                </div>
            </div>
            <div class="ibox-body">
                {!! Form::model($vehicle, ['url' => ['update-vehicle', $vehicle->id], 'method' => 'PUT']) !!}

                    @include('admin.vehicletype.partials.form')

                 {!! Form::close() !!}

            </div>
        </div>
    </div>
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
</div>
@endsection
@include('admin.vehicletype.script')

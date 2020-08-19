@extends('admin.base.index')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="ibox">
                <div class="ibox-head bg-info">
                    <div class="ibox-title text-white">Modificar convenio</div>
                    <div class="ibox-tools">
                        <a class="text-white " href="{{route('index-convenios')}}">
                            <i class="fa fa-arrow-left"></i>
                            Atras</a>
                    </div>
                </div>
                <div class="ibox-body">
                    {!! Form::model($convenio, ['url' => ['update-convenio', $convenio->id], 'method' => 'PUT','files'=>true]) !!}

                    @include('admin.convenios.partials.form')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>

    </div>
@endsection
@include('admin.companytype.script')

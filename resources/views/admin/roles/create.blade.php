@extends('admin.base.index')
@section('title')
    Roles & Permisos
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head bg-info">
                    <div class="ibox-title text-white">Crear nuevo rol</div>
                    <div class="ibox-tools">
                        <a class="text-white" href="{{route('get-roles')}}">
                            <i class="fa fa-arrow-left"></i>
                            Atras</a>
                    </div>
                </div>
                <div class="ibox-body">
                    <div class="col-lg-12">

                        {!! Form::open(['url' => 'store-role']) !!}

                        @include('admin.roles.partials.form')

                        {!! Form::close() !!}
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection

@include('admin.roles.scripts')

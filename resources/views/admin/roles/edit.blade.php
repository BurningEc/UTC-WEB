@extends('admin.base.index')
@section('title')
    Roles & Permisos
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head bg-info">
                    <div class="ibox-title text-white">Modificar rol</div>
                    <div class="ibox-tools">
                        <a class="text-white" href="{{route('get-roles')}}">
                            <i class="fa fa-arrow-left"></i>
                            Atras</a>
                    </div>

                </div>
                <div class="ibox-body">
                    <div class="col-lg-12">

                        {!! Form::model($role, ['url' => ['update-role', $role->id], 'method' => 'PUT', 'files' => true]) !!}

                        @include('admin.roles.partials.form')

                        {!! Form::close() !!}
                    </div>

                </div>

            </div>
        </div>
    </div>


@endsection

@include('admin.roles.scripts')

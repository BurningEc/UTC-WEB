@extends('admin.base.index')
@section('title')
    Roles & Permisos
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12">


            <div class="row">
                <div class="col-xl-3 col-lg-12">
                    <div class="card task-board-left">
                        <div class="card-header bg-info text-white">
                            <h5 class="mt-2">Roles
                                @can('crear rol')
                                    <a class="text-white hover pull-right" href="{{route('create-role')}}">
                                        <i class="fa fa-plus-square"></i>
                                        <small>Añadir</small></a>
                                @endcan
                            </h5>

                        </div>
                        <ul class="list-group list-group-flush lista-roles">
                            @include('admin.roles.listRoles')
                        </ul>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-12">
                    <div class="card">
                        @can('leer rol')

                            <div class="card-header bg-info text-white">

                                <div class="d-flex align-items-center">
                                    <h5 class="mt-2">Permisos asignados</h5>
                                </div>
                            </div>
                            <div class="card-body">


                                <div class="table-responsive table-roles">
                                    @include('admin.roles.table')
                                </div>


                            </div>
                        @else
                            <x-acces></x-acces>
                        @endcan

                    </div>

                </div>
            </div>


        </div>
    </div>



@endsection

@include('admin.roles.scripts')

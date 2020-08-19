@extends('admin.base.index')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="ibox">
            <div class="ibox-head bg-info">
                <div class="ibox-title text-white">Lista solicitudes de empresas</div>
                <div class="ibox-tools">


                </div>
            </div>
            <div class="ibox-body">

                @if (count($request_merchants)>0)
                    <div class="table-users table-responsive">
                        @include('admin.merchants.tableRequest')

                    </div>
                    {{-----
                    {{$request_merchants->render()}}----}}
                @else
                <div class="text-center">
                    <img width="300" height="260" src="{{asset('assets/img/data.png')}}" alt="">
                    <h6>No hay datos para mostrar</h6>
                </div>

                @endif

            </div>
        </div>
    </div>
</div>
@endsection



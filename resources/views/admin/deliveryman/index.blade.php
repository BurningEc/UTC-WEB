@extends('admin.base.index')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="ibox">
            <div class="ibox-head bg-info">
                <div class="ibox-title text-white">Listado de Repartidores</div>


            </div>
            <div class="ibox-body">

                @if (count($deliverymen)>0)
                    <div class="table-users table-responsive">
                        @include('admin.deliveryman.table')

                    </div>

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

@include('admin.users.script')

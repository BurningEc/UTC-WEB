@extends('admin.base.index')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="ibox">
            <div class="ibox-head bg-info">
                <div class="ibox-title text-white">Mensajes recibidos</div>
                <div class="ibox-tools">

                </div>
            </div>
            <div class="ibox-body">
                @if (count($messages)>0)
                    <div class="table-products table-responsive">
                        @include('admin.messages.table')

                    </div>
                    {{$messages->render()}}
                @else
                    <h4 class="text-center"> <i class="fa fa-search font-20 text-info"></i> No hay datos para mostrar </h4>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection


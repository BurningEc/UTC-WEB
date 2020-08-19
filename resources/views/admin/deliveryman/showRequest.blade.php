@extends('admin.base.index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head badge-info">
                    <div class="ibox-title">Detalle de la solicitud</div>
                    <a class="text-white" href="{{route('get-request-deliverymen')}}">
                        <i class="fa fa-arrow-left"></i>
                        Atras</a>
                </div>
                <div class="ibox-body">
                    {!! Form::model($request, ['url' => ['store-request-delivery',$request->id], 'method' => 'POST','files' => true]) !!}
                    @include('admin.deliveryman.partials.formrequets')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@include('admin.deliveryman.script')

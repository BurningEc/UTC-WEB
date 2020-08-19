@extends('admin.base.index')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="ibox">
            <div class="ibox-head bg-info">
                <div class="ibox-title text-white">Modificar Producto</div>
                <div class="ibox-tools">
                    <a class="text-white" href="{{route('get-product')}}">
                    <i class="fa fa-arrow-left"></i>
                        Atras</a>
                </div>
            </div>
            <div class="ibox-body">
                {!! Form::model($product, ['url' => ['update-product', $product->id], 'method' => 'PUT','files' => true]) !!}
                @include('admin.products.partials.form_edit')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection




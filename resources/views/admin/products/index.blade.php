@extends('admin.base.index')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="ibox">
            <div class="ibox-head bg-info">
                <div class="ibox-title text-white">Lista Productos</div>
                <div class="ibox-tools">
                    @can('create product')
                    <a class="text-white hover" href="{{route('create-product')}}">
                        <i class="fa fa-plus-square"></i>
                            Añadir</a>
                    @endcan

                </div>
            </div>
            <div class="ibox-body">
                @if (count($products)>0)
                    <div class="table-products table-responsive">
                        @include('admin.products.tableProducts')

                    </div>
                    {{$products->render()}}
                @else
                    <h4 class="text-center"> <i class="fa fa-search font-20 text-info"></i> No hay datos para mostrar </h4>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection

@include('admin.products.script')

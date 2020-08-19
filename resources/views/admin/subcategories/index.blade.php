@extends('admin.base.index')

@section('content')
<div class="row">
    @can('create subcategory')
    <div class="col-md-4">
        <div class="ibox">
            <div class="ibox-head bg-info">
                <div class="ibox-title text-white">Nueva Subcategortía</div>
                <div class="ibox-tools">
                </div>
            </div>
            <div class="ibox-body">
                {!! Form::open(['url' => 'store-subcategory']) !!}
                    @include('admin.subcategories.partials.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    @endcan


    <div class="col-md-8">
        <div class="ibox">
            <div class="ibox-head badge-info">
                <div class="ibox-title">Lista de Subcategorías</div>
            </div>
            <div class="ibox-body">
                @if (count($subcategories)>0)
                    <div class="table-categories table-responsive">
                        @include('admin.subcategories.tableCategorie')

                    </div>
                    {{$subcategories->render()}}
                @else
                    <h4 class="text-center"> <i class="fa fa-search font-20 text-info"></i> No hay datos para mostrar </h4>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection

@include('admin.subcategories.script')

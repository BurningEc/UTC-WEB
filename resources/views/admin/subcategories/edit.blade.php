@extends('admin.base.index')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="ibox">
            <div class="ibox-head bg-info">
                <div class="ibox-title text-white">Modificar Sub categortía</div>
                <div class="ibox-tools">

                </div>
            </div>
            <div class="ibox-body">
                {!! Form::model($subcategory, ['url' => ['update-category', $subcategory->id], 'method' => 'PUT']) !!}

                    @include('admin.subcategories.partials.form')

                 {!! Form::close() !!}

            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Lista de Categorías</div>
            </div>
            <div class="ibox-body">
                <div class="table-categories">
                    @include('admin.subcategories.tableCategorie')
                </div>
                {{$subcategories->render()}}
            </div>
        </div>
    </div>
</div>
@endsection
@include('admin.subcategories.script')

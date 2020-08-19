@extends('admin.base.index')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="ibox">
            <div class="ibox-head bg-info">
                <div class="ibox-title text-white">Modificar Categortía</div>
                <div class="ibox-tools">

                </div>
            </div>
            <div class="ibox-body">
                {!! Form::model($category, ['url' => ['update-category', $category->id], 'method' => 'PUT','files'=>true]) !!}

                    @include('admin.categories.partials.form_edit')

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
                    @include('admin.categories.tableCategorie')
                </div>
                {{$categories->render()}}
            </div>
        </div>
    </div>
</div>
@endsection
@include('admin.categories.script')

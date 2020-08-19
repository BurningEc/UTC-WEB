@extends('admin.base.index')

@section('content')
<div class="row">

    <div class="col-md-12">
        <div class="ibox">
            <div class="ibox-head badge-info">
                <div class="ibox-title">Lista de Categorías</div>
            </div>
            <div class="ibox-body">
                <div class="table-categories table-responsive">
                    @include('admin.categories.tableCategorie')

                </div>
                {{$categories->render()}}
            </div>
        </div>
    </div>
</div>
@endsection

@include('admin.categories.script')

@extends('admin.base.index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head bg-info">
                    <div class="ibox-title text-white">Empresario</div>
                    <div class="ibox-tools">
                        <a class="text-white" href="{{route('get-merchants')}}">
                            <i class="fa fa-arrow-left"></i>
                            Atras</a>
                    </div>
                </div>
                <div class="ibox-body">
                    {!! Form::model($merchant, ['url' => ['store-request-merchants',$merchant->id], 'method' => 'POST','files' => true]) !!}
                    @include('admin.merchants.partials.formMerchant')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head bg-info">
                    <div class="ibox-title text-white">Mi empresas</div>
                    <div class="ibox-tools">

                    </div>
                </div>
                <div class="ibox-body">
                    <div class="row">
                        <div class="col-md-5 form-company">
                            @if (session('status'))

                                <div class="alert alert-success mr-3 ml-3">
                                    <a href="#" class="close" data-dismiss="alert"
                                       aria-label="close">&times;</a> {{ session('status') }}
                                </div>
                            @endif

                            @include('admin.merchants.partials.formCompany')

                        </div>

                        <div class="col-md-7">
                            @if (count($merchant->companies)>0)
                                <div class="table-list-companies table-responsive">
                                    @include('admin.merchants.tableCompany')

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
        </div>
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head bg-info">
                    <div class="ibox-title text-white">
                        <h5 id="title-category">Categorías</h5>
                    </div>
                    <div class="ibox-tools">

                    </div>
                </div>
                <div class="ibox-body">
                    <div class="row">
                        <div class="col-md-3 form-category">

                            @include('admin.categories.partials.form')

                        </div>
                        <div class="col-md-9 table-list-catgories">

                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head bg-info">
                    <div class="ibox-title text-white">Productos</div>
                    <div class="ibox-tools">

                    </div>
                </div>
                <div class="ibox-body">
                    <div class="row">
                        <div class="col-md-4 form-product">
                        </div>

                        <div class="col-md-8 table-list-products">

                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>

@endsection

@include('admin.merchants.script')


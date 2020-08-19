<div class="row">
    <div class="col-md-12">
        <h6>Datos del usuario</h6>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <small class="text-muted">Nombres</small>
            <div class="input-group input-group-alternative mb-3">

                {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Nombres']) !!}


            </div>
        </div>
        @error('name')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}.
        </div>
        @enderror
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <small class="text-muted">Apellidos</small>
            <div class="input-group input-group-alternative mb-3">

                {!! Form::text('last_name', null, ['class'=>'form-control','placeholder'=>'Apellidos']) !!}
            </div>
        </div>
        @error('last_name')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}.
        </div>
        @enderror
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <small class="text-muted">Documento de identificación</small>
            <div class="input-group input-group-alternative mb-3">

                {!! Form::text('ci', null, ['class'=>'form-control','placeholder'=>'Documento de identificación']) !!}
            </div>
        </div>
        @error('ci')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}.
        </div>
        @enderror
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <small class="text-muted">Fecha de nacimiento</small>
            <div class="input-group input-group-alternative mb-3">

                {!! Form::date('birth_date', null, ['class'=>'form-control']) !!}
            </div>
        </div>
        @error('birth_date')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}.
        </div>
        @enderror
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <small class="text-muted">Dirección</small>
            <div class="input-group input-group-alternative mb-3">

                {!! Form::text('address', null, ['class'=>'form-control','placeholder'=>'Dirección']) !!}
            </div>
        </div>
        @error('address')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}.
        </div>
        @enderror
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <small class="text-muted">Télefono</small>
            <div class="input-group input-group-alternative mb-3">

                {!! Form::text('phone', null, ['class'=>'form-control','placeholder'=>'Télefono']) !!}
            </div>
        </div>
        @error('phone')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}.
        </div>
        @enderror
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <small class="text-muted">Correo electrónico</small>
            <div class="input-group input-group-alternative mb-3">

                {!! Form::text('email', null, ['class'=>'form-control','placeholder'=>'Correo electrónico']) !!}
            </div>
        </div>
        @error('email')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}.
        </div>
        @enderror
    </div>


    <div class="col-lg-6">
        <div class="form-group">
            <small class="text-muted">Género</small>
            <div class="">
                <div class="form-check form-check-inline">
                    <label>
                        {{ Form::radio('gender', 'masculino') }} Masculino
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label>
                        {{ Form::radio('gender', 'femenino') }} Femenino
                    </label>
                </div>

            </div>

            @error('gender')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}.
            </div>
            @enderror
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <small class="text-muted">Documento adjunto</small>
            <div class="form-control">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                        data-target=".bd-example-modal-lg">Ver
                    documento
                </button>
            </div>

        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-control text-center">
            <img id="show_img_user" height="200" class="img-responsive" src="../{{$deliveryman->user->url_image}}" alt="Imagen vacía">
       </div>
        <div class="form-group">
            <small class="text-muted">Forografía del repartidor</small>
            {!! Form::file('url_image', ['class'=>'form-control','id'=>'img_user']) !!}
            @error('url_image')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}.
            </div>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <small class="text-muted">Convenio de la empresa</small>
            <div class="input-group input-group-alternative mb-3">
                {!! Form::select('id_convenio', $convenios,null, ['class'=>'form-control']) !!}
            </div>
        </div>
        @error('company_type')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}.
        </div>
        @enderror
    </div>
    <div class="col-md-12">
        <h6>Datos del vehículo</h6>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <div class="input-group input-group-alternative mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-bus-front-12"></i></span>
                </div>

                {!! Form::text('vehicle_make', null, ['class'=>'form-control','placeholder'=>'Marca del vehículo']) !!}
            </div>
        </div>
        @error('vehicle_make')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}.
        </div>
        @enderror
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <div class="input-group input-group-alternative mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-bus-front-12"></i></span>
                </div>

                {!! Form::select('vehicle_type', $vehicles,null, ['class'=>'form-control']) !!}
            </div>
        </div>
        @error('vehicle_type')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}.
        </div>
        @enderror
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <div class="input-group input-group-alternative mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-bus-front-12"></i></span>
                </div>
                {!! Form::text('vehicle_plate', null, ['class'=>'form-control','placeholder'=>'Placa del vehículo']) !!}
            </div>
        </div>
        @error('vehicle_plate')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}.
        </div>
        @enderror
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <div class="input-group input-group-alternative mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-bus-front-12"></i></span>
                </div>

                {!! Form::text('vehicle_year', null, ['class'=>'form-control','placeholder'=>'Año del vehículo']) !!}
            </div>
        </div>
        @error('vehicle_year')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}.
        </div>
        @enderror
    </div>
    <div class="col-lg-6">
        <div class="form-control text-center">
            <img id="show_img_vehicle" height="200" class="img-responsive" src="../{{$deliveryman->url_vehicle}}" alt="Imagen vacía">
       </div>
        <div class="form-group">
            <small class="text-muted">Fotografía vehículo</small>
            {!! Form::file('url_vehicle', ['class'=>'form-control','id'=>'img_vehicle']) !!}
            @error('url_vehicle')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}.
            </div>
            @enderror
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label class="text-muted" for="">Describe brevemente tu vehículo</label>
            <div class="input-group input-group-alternative mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-ruler-pencil"></i></span>
                </div>
                {!! Form::textarea('vehicle_description',null, ['class'=>'form-control']) !!}

            </div>
        </div>
        @error('vehicle_description')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}.
        </div>
        @enderror
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('status', 'Estado del repartidor') !!}
            <div class="form-control">
                <div class="form-check form-check-inline">
                    <label class="text-success">
                        {{ Form::radio('status', 'aprobado') }} Activo
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="">
                        {{ Form::radio('status', 'revision') }} Inactivo
                    </label>
                </div>

                {{---
 <div class="form-check form-check-inline">
                    <label class="text-danger">
                        {{ Form::radio('status', 'denegado') }} Denegar
                    </label>
                </div>

                    ---}}
            </div>

            @error('status')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}.
            </div>
            @enderror
        </div>
    </div>

</div>

<div class="text-left">

    <button type="submit" class="btn btn-success btn-lg mt-4">Guadar</button>
    <a href="{{route('get-request-merchants')}}" type="submit" class="btn btn-danger btn-lg mt-4">Cancelar</a>

</div>


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Documento adjunto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            <embed src="../{{$deliveryman->url_file}}"
                                   type="application/pdf"
                                   width="750px"
                                   height="400px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{route('download-pdf-request-delivery',$request->id)}}" class="btn btn-success"><i class="fa fa-download"></i> Descargar</a>
            </div>
        </div>
    </div>
</div>

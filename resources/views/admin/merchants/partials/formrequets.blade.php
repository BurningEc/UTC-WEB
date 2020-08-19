<div class="row">
    <div class="col-md-12">
        <h6>Datos del solicitante</h6>
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

    <div class="col-lg-6">
        <div class="form-group">
            <small class="text-muted"></small>
            {!! Form::file('url_image', ['class'=>'form-control']) !!}
            @error('url_image')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}.
            </div>
            @enderror
        </div>
    </div>


    <div class="col-md-12">
        <h6>Datos de la empresa</h6>
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
    <div class="col-md-6">
        <div class="form-group">
            <small class="text-muted">Nombre de empresa</small>
            <div class="input-group input-group-alternative mb-3">


                {!! Form::text('company_name', null, ['class'=>'form-control','placeholder'=>'Nombre de empresa']) !!}
            </div>
        </div>
        @error('company_name')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}.
        </div>
        @enderror
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <small class="text-muted">Ruc de la empresa</small>
            <div class="input-group input-group-alternative mb-3">


                {!! Form::text('company_ruc', null, ['class'=>'form-control','placeholder'=>'Ruc de la empresa']) !!}
            </div>
        </div>
        @error('company_ruc')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}.
        </div>
        @enderror
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <small class="text-muted">Tipo de empresa</small>
            <div class="input-group input-group-alternative mb-3">
                {!! Form::select('company_type', $companies,null, ['class'=>'form-control']) !!}
            </div>
        </div>
        @error('company_type')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}.
        </div>
        @enderror
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <small class="text-muted">Ubicación de la empresa</small>
            <div class="input-group input-group-alternative mb-3">

                {!! Form::text('company_address', null, ['class'=>'form-control','placeholder'=>'Ubicación de la empresa']) !!}
            </div>
        </div>
        @error('company_address')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}.
        </div>
        @enderror
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <small class="text-muted">Latitud</small>
            <div class="input-group input-group-alternative mb-3">

                {!! Form::text('latitude', null, ['class'=>'form-control','placeholder'=>'Ubicación de la empresa']) !!}
            </div>
        </div>
        @error('latitude')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}.
        </div>
        @enderror
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <small class="text-muted">Longitud</small>
            <div class="input-group input-group-alternative mb-3">

                {!! Form::text('longitude', null, ['class'=>'form-control','placeholder'=>'Ubicación de la empresa']) !!}
            </div>
        </div>
        @error('longitude')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}.
        </div>
        @enderror
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <small class="text-muted">Télefono de la empresa</small>
            <div class="input-group input-group-alternative mb-3">

                {!! Form::text('company_phone', null, ['class'=>'form-control','placeholder'=>'Télefono de la empresa']) !!}
            </div>
        </div>
        @error('company_phone')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}.
        </div>
        @enderror
    </div>


    <div class="col-lg-6">
        <div class="form-group">
            <small class="text-muted">Fotografía empresa</small>
            {!! Form::file('url_merchant', ['class'=>'form-control']) !!}
            @error('url_merchant')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}.
            </div>
            @enderror
        </div>
    </div>
    <div class="col-lg-6">
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
    <div class="col-md-12">
        <div class="form-group">
            <small class="text-muted" for="">Describe brevemente tu empresa</small>
            <div class="input-group input-group-alternative mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-ruler-pencil"></i></span>
                </div>
                {!! Form::textarea('company_description',null, ['class'=>'form-control']) !!}

            </div>
        </div>
        @error('company_description')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}.
        </div>
        @enderror
    </div>
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('status', 'Estado de la solicitud') !!}
            <div class="form-control">
                <div class="form-check form-check-inline">
                    <label class="text-success">
                        {{ Form::radio('status', 'aprobado') }} Aprobar
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="text-danger">
                        {{ Form::radio('status', 'denegado') }} Denegar
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="">
                        {{ Form::radio('status', 'revision') }} Revisión
                    </label>
                </div>
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
                            <embed src="../{{$request->url_file}}"
                                   type="application/pdf"
                                   width="750px"
                                   height="400px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{route('download-pdf-request-merchant',$request->id)}}" class="btn btn-success btn-download"><i
                        class="fa fa-download"></i> Descargar</a>
            </div>
        </div>
    </div>
</div>


<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <small class="text-muted" >Nombres</small>
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
            <small class="text-muted" >Apellidos</small>
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
            <small class="text-muted" >Documento de identificación</small>
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
            <small class="text-muted" >Fecha de nacimiento</small>
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
            <small class="text-muted" >Dirección</small>
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
            <small class="text-muted" >Télefono</small>
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
            <small class="text-muted" >Correo electrónico</small>
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
            <small class="text-muted" >Género</small>
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
</div>

<div class="text-left">

<button type="submit" class="btn btn-success btn-lg mt-4">Guadar</button>

</div>


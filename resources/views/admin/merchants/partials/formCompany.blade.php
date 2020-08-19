{!! Form::model($company, ['url' => ['update-company-merchant', $company->id], 'method' => 'PUT','files' => true]) !!}

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <small class="text-muted" >Nombre de empresa</small>
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
    <div class="col-md-12">
        <div class="form-group">
            <small class="text-muted" >Ruc de la empresa</small>
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
    <div class="col-md-12">
        <div class="form-group">
            <small class="text-muted" >Tipo de empresa</small>
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
    <div class="col-md-12">
        <div class="form-group">
            <small class="text-muted" >Ubicación de la empresa</small>
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
    <div class="col-md-6">
        <div class="form-group">
            <small class="text-muted" >Latitud</small>
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
    <div class="col-md-6">
        <div class="form-group">
            <small class="text-muted" >Longitud</small>
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


    <div class="col-lg-12">
   <div class="form-control text-center">
        <img class="img-responsive" src="../{{$company->url_merchant}}" alt="Imagen vacía">
   </div>
        <div class="form-group">
            <small class="text-muted" >Fotografía empresa</small>
            {!! Form::file('url_merchant', ['class'=>'form-control']) !!}
            @error('url_merchant')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}.
            </div>
            @enderror
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
            <div class="alert alert-danger alert-dismissible fade show"  role="alert">
                {{ $message }}.
            </div>
         @enderror
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            {!! Form::label('status', 'Estado') !!}
            <div class="form-control">
                <div class="form-check form-check-inline">
                    <label>
                        {{ Form::radio('status', 'activo') }} Activo
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label>
                        {{ Form::radio('status', 'inactivo') }} Inactivo
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
    <div class="col-md-12">
        <button type="submit" class="btn btn-success">Guardar</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Ver documento</button>
    </div>

</div>


@include('admin.merchants.modalPdf')

{!! Form::close() !!}

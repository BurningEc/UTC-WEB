<div class="row">

    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('ci', 'Cédula') !!}
            {!! Form::text('ci',null, ['class'=>'form-control']) !!}
            @error('ci')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}.
                        </div>
             @enderror
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('ruc', 'RUC') !!}
            {!! Form::text('ruc',null, ['class'=>'form-control']) !!}
            @error('ruc')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}.
                        </div>
             @enderror
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('name', 'Nombres') !!}
            {!! Form::text('name',null, ['class'=>'form-control']) !!}
            @error('name')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}.
                        </div>
             @enderror
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('last_name', 'Apellidos') !!}
            {!! Form::text('last_name',null, ['class'=>'form-control']) !!}
            @error('last_name')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}.
                        </div>
             @enderror
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('username', 'Nombre de usuario') !!}
            {!! Form::text('username',null, ['class'=>'form-control']) !!}
            @error('username')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $message }}.
                </div>
            @enderror
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            {!! Form::label('birth_date', 'Fecha de nacimiento') !!}
            {!! Form::date('birth_date', null,['class'=>'form-control']) !!}
            @error('birth_date')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}.
            </div>
            @enderror
        </div>
    </div>


    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('email', 'Correo electrónico') !!}
            {!! Form::text('email',null, ['class'=>'form-control']) !!}
            @error('email')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $message }}.
                </div>
            @enderror
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('url_image', 'Fotografía (jpeg, png, jpg)') !!}
            {!! Form::file('url_image', ['class'=>'form-control']) !!}
            @error('url_image')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}.
            </div>
            @enderror
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('gender', 'Genéro') !!}
            <div class="form-control">
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
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
           {!! Form::submit('Guardar', ['class'=>'btn btn-success']) !!}
        </div>
    </div>
</div>



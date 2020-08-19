<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name',null, ['class'=>'form-control']) !!}
            @error('name')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}.
                        </div>
             @enderror
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            {!! Form::label('description', 'Descripción') !!}
            {!! Form::text('description',null, ['class'=>'form-control']) !!}
            @error('description')
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
    <div class="col-lg-12">
        <div class="form-group">
           {!! Form::submit('Guardar', ['class'=>'btn btn-success']) !!}
        </div>
    </div>
</div>



<div class="form-group">
    <h6>Nombre <span class="text-danger">*</span></h6>
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
    @error('name')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> {{ $message }}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @enderror
</div>
<div class="form-group">
    <h6 class="display-block">Estado <span class="text-danger">*</span></h6>
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
    @error('status')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> {{ $message }}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @enderror
</div>
<div class="form-group">
    <h6 class="display-block">Permiso especial <span class="text-danger">*</span></h6>
    <div class="form-check form-check-inline">
        <label class="radio-total">
            {{ Form::radio('permmission', 'especial',['class'=>'radio-oculto']) }} Acceso total
        </label>
    </div>
    <div class="form-check form-check-inline">
        <label class="radio-total">
            {{ Form::radio('permmission', 'ninguno',['class'=>'radio-oculto']) }} Ningún permiso
        </label>
    </div>
    <div class="form-check form-check-inline">
        <label class="radio-asignar">
            {{ Form::radio('permmission', 'asignar') }} Asignar permiso
        </label>
    </div>

</div>

<div class="permisos">
    <div class="form-group">
        <h6 class="display-block">Asignar permisos <span class="text-danger">*</span></h6>
    </div>
    <div class="row">
        @foreach($permissions as $permission)
            <div class="col-sm-3 mb-3">

                <h5>{{ $permission->modulo}}</h5>
                <label>
                    {{ Form::checkbox('permissions[]', $permission->id) }} {{ $permission->name}}
                    <small><em> ({{ $permission->description }})</em></small>
                </label>

            </div>
        @endforeach
    </div>
</div>


<div class="text-right">
    <a class="btn btn-danger btn-lg submit-btn" href="{{route('get-roles')}}">Cancelar</a>
    {{ Form::submit('Guardar', ['class' => 'btn btn-success btn-lg submit-btn']) }}
</div>

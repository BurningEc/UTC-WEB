<div class="row">
    <div class="col-lg-12">
        {!! Form::hidden('id_user',null, ['id'=>'id_user_category','class'=>'form-control']) !!}
        @error('id_user')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}.
            </div>
        @enderror
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name',null, ['id'=>'name_cat','class'=>'form-control']) !!}
            @error('name')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}.
                        </div>
             @enderror
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            {!! Form::label('url_image', 'Fotografía (jpeg, png, jpg)') !!}
            {!! Form::file('url_image', ['id'=>'img_category','class'=>'form-control']) !!}
            <div class="text-center mt-2">
                <img  id="show_img_category" src="{{asset('img/image.png')}}" height="150">
            </div>


            @error('url_image')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}.
            </div>
            @enderror
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            {!! Form::label('description', 'Descripción') !!}
            {!! Form::text('description',null, ['id'=>'description_cat','class'=>'form-control']) !!}
            @error('description')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $message }}.
                </div>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    {{-----
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
    -----}}
    <div class="col-lg-12">
        <div class="form-group">
           {!! Form::submit('Guardar', ['class'=>'btn btn-success btn-save-category']) !!}
        </div>
    </div>
</div>



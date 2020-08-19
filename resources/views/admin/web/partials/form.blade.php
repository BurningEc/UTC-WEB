<div class="row">


    <div class="col-lg-12">
        <div class="form-group">
            {!! Form::label('title', 'Título') !!}
            {!! Form::text('title',null, ['id'=>'title','class'=>'form-control']) !!}
            @error('title')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}.
            </div>
            @enderror
        </div>
    </div>

    <div class="col-lg-12">
        <div class="form-group">
            {!! Form::label('description', 'Descripción') !!}
            {!! Form::textarea('description',null, ['id'=>'description','class'=>'form-control']) !!}
            @error('description')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}.
            </div>
            @enderror
        </div>
    </div>

    <div class="col-lg-12">
        <div class="form-group">
            {!! Form::label('url_image', 'Fotografía (jpeg, png, jpg)') !!}
            {!! Form::file('url_image', ['id'=>'url_image','class'=>'form-control']) !!}
            <div class="text-center mt-2">
                @isset($slider)
                    <img id="show_img_slider" src="{{asset($slider->url_image)}}" height="150">
                @else

                    <img id="show_img_slider" src="{{asset('img/image.png')}}" height="150">
                @endisset


            </div>
            @error('url_image')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}.
            </div>
            @enderror
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('text_btn', 'Texto del botón') !!}
            {!! Form::text('text_btn',null, ['id'=>'text_btn','class'=>'form-control']) !!}
            @error('text_btn')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}.
            </div>
            @enderror
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('url_btn', 'Url del botón') !!}
            {!! Form::text('url_btn',null, ['id'=>'url_btn','class'=>'form-control']) !!}
            @error('url_btn')
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
            {!! Form::submit('Guardar', ['class'=>'btn btn-success btn-save-product pull-right']) !!}
        </div>
    </div>
</div>



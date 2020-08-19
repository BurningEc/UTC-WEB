<div class="row">
    {!! Form::hidden('id_company',$id_company, ['id'=>'id_company_product','class'=>'form-control']) !!}

    <div class="col-lg-12">
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name',null, ['id'=>'name_product','class'=>'form-control']) !!}
            @error('name')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}.
            </div>
            @enderror
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            {!! Form::label('id_sub_category', 'Categoría') !!}
            {!! Form::select('id_category', $categories,null, [ 'id'=>'id_category_product','class'=>'form-control']) !!}
            @error('id_sub_category')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}.
            </div>
            @enderror
        </div>
    </div>

    <div class="col-lg-12">
        <div class="form-group">
            {!! Form::label('description', 'Descripción') !!}
            {!! Form::text('description',null, ['id'=>'description_product','class'=>'form-control']) !!}
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
            {!! Form::file('url_image', ['id'=>'img_product','class'=>'form-control']) !!}
            <div class="text-center mt-2">
                <img id="show_img_product" src="{{asset('img/image.png')}}" height="150">
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
            {!! Form::label('sale_price', 'Precio de venta') !!}
            {!! Form::text('sale_price',null, ['id'=>'price_product','class'=>'form-control']) !!}
            @error('sale_price')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}.
            </div>
            @enderror
        </div>
    </div>

    <div class="col-lg-6">
        <div class="form-group">
            {!! Form::label('stock', 'Cantidad') !!}
            {!! Form::number('stock',null, ['id'=>'stock_product','class'=>'form-control']) !!}
            @error('stock')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}.
            </div>
            @enderror
        </div>
    </div>
    {{---

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
     ---}}
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            {!! Form::button('Guardar', ['class'=>'btn btn-success btn-save-product']) !!}
        </div>
    </div>
</div>



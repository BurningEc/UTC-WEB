<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //id_sub_category,code,name,purchase_price,sale_price,stock,descripcion,status
        return [
            'id_sub_category'=>'required',
            'code'=>'required|string|unique:products',
            'name'=>'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u|unique:products',
            'purchase_price'=>'required|numeric|between:0,99.99',
            'sale_price'=>'required|numeric|between:0,99.99',
            'stock'=>'required|integer',
            'description'=>'required|string',
            'status'=>'required',
            'url_image'=>'mimes:jpg,jpeg,png',

        ];
    }
    public function messages()
    {
        return [
            'code.unique' => 'Este codigo ya existe.',
            'code.required' => 'Este campo es obligatorio.',
            'name.required' => 'Este campo es obligatorio.',
            'name.regex' => 'Este campo debe contener solo letras.',
            'name.unique' => 'Este producto ya existe.',
            'purchase_price.required' => 'Este campo es obligatorio.',
            'purchase_price.decimal' => 'El precio no es válido.',
            'sale_price.required' => 'Este campo es obligatorio.',
            'sale_price.decimal' => 'El precio no es válido.',
            'stock.required' => 'Este campo es obligatorio.',
            'stock.integer' => 'La cantidad no es válida.',
            'description.required' => 'Este campo es obligatorio.',
            'status.required' => 'Este campo es obligatorio.',
            'id_category.required' => 'Debe selecionar una categoría.',
            'url_image.mimes' => 'Formato de imagen incorrecto.',
        ];
    }
}

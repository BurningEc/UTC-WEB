<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductPut extends FormRequest
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
            'id_category'=>'required',
            'name'=>['required','regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u',Rule::unique('products')->ignore($this->id)],
            'sale_price'=>'required|numeric|between:0,9999.99',
            'stock'=>'required|integer',
            'description'=>'required|string',
            'status'=>'required',
            'url_image'=>'mimes:jpg,jpeg,png',

        ];
    }
    public function messages()
    {
        return [

            'name.required' => 'Este campo es obligatorio.',
            'name.regex' => 'Este campo debe contener solo letras.',
            'name.unique' => 'Este producto ya existe.',

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

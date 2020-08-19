<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreMerchantValidatePost extends FormRequest
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
        return [
            'ci' => 'required|numeric|digits:10',
            'ruc' => 'numeric|unique:users',
            'name'=>'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u|max:255',
            'last_name'=>'required|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u|max:255',
            'birth_date'=>'date',
            'gender'=>'required',
            'email'=>['required','email','max:255','unique:users'],
            'status'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'url_image'=>'mimes:png,jpeg,jpg',

            'company_name'=>'required|string|unique:companies',
            'company_ruc'=>'numeric|digits:13|unique:companies',
            'company_address'=>'required',
            'company_type'=>'required',
            //'latitude'=>'string',
            //'longitude'=>'string',
            'url_merchant'=>'mimes:png,jpeg,jpg',

        ];
    }
    public function messages()
    {
         return [
            'ci.unique' => 'El usuario ya existe',
            'ci.digits' => 'El número debe contener 10 carácteres',
            'ci.required' => 'Este campo es obligatorio',
            'ci.numeric' => 'El campo solo acepta números',

            'ruc.unique' => 'El ruc ya existe',
            'ruc.digits' => 'El número debe contener 13 carácteres',
            'ruc.numeric' => 'El campo solo acepta números',

            'name.required' => 'Este campo es obligatorio.',
            'name.regex' => 'Este campo debe contener solo letras.',
            'last_name.required' => 'Este campo es obligatorio.',
            'last_name.regex' => 'Este campo debe contener solo letras.',

            'username.required' => 'Este campo es obligatorio.',
            'username.unique' => 'El usuario ya existe',

            'birth_date.date'=>'Ingrese una fecha valida',

            'gender.required'=>'Este campo es obligatorio.',

            'email.email' =>'No es un correo válido.',
            'email.unique' => 'El correo del usuario ya está en uso.',
            'email.required' => 'El correo del usuario es obligatorio.',

            'status.required'=>'Este campo es obligatorio.',
            'id_rol.required'=>'Este campo es obligatorio.',

            'url_image.mimes'=>'Este formato de la imagen no es valído.',
            'address.required' => 'Este campo es obligatorio.',
            'phone.required' => 'Este campo es obligatorio.',



            'company_ruc.unique' => 'El ruc ya existe',
            'company_ruc.digits' => 'El número debe contener 13 carácteres',
            'company_ruc.numeric' => 'El campo solo acepta números',


            'company_type.required' => 'Este campo es obligatorio.',
            'company_type.regex' => 'Este campo debe contener solo letras.',
            'company_description.required' => 'Este campo es obligatorio.',
            'url_merchant.mimes'=>'Este formato de la imagen no es valído.',



        ];
    }
}
